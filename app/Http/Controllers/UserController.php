<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;

use App\Models\Ticket;
use App\Models\Customer;

use App\Models\Password_reset_token;

use App\Mail\ResetCodeMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index.index');
        } else {
            return redirect()->route('entry.login')->with('alert', 'error')->withInput();
        }
    }

    public function register(Request $request)
    {

        $user = new User();
        $user->id = rand('10000', '99999');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->p_numb = $request->input('p_numb');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return view('entry.login');

    }

    public function send_reset_code(Request $request)
    {

        $email = $request->input('email');

        $exist = User::where('email', $email)->exists();

        if ($exist) {
            $code = rand('100000', '999999');

            $Password_reset_token = new Password_reset_token();
            $Password_reset_token->email = $email;
            $Password_reset_token->token = $code;
            $Password_reset_token->expires_at = now()->addMinutes(15);

            $Password_reset_token->save();

            Mail::to($request->input('email'))->send(new ResetCodeMail($code));

            return redirect()->route('entry.reset_pass_2');
        } else {
            return redirect()->route('entry.reset_pass_1')->with('alert', 'noemail');
        }
    }

    public function verify_code(Request $request) {

        $code = $request->input('code');

        $exist = Password_reset_token::where('token', $code)
        ->orderBy('created_at', 'desc')
        ->first();

        $checkExpiration = Password_reset_token::where('token', $code)->first();

        if($exist) {

            if ($checkExpiration->expires_at < now()) {
                return redirect()->route('entry.reset_pass_2')->with('alert', 'expired');
            }

            $email = $checkExpiration->email;

            return redirect()->route('entry.reset_pass_3', ['email' => $email]);

        } else {
            return redirect()->route('entry.reset_pass_2')->with('alert', 'invalid');
        }
    }

    public function update_password(Request $request) {

        $newpassword = $request->input('password');

        $email = $request->input('email');

        $user = User::where('email', $email)->first();

        $hashedPass = $user->password;

        if (Hash::check($newpassword, $hashedPass)) {

            return redirect()->route('entry.reset_pass_3', ['email' => $email])->with('alert', 'invalid');

        } else {
            $user->password = bcrypt($newpassword);
            $user->save();

            return redirect()->route('entry.login');
        }
    }
}
