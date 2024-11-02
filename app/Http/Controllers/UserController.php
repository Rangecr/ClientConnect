<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Log;
use App\Models\Ticket;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function login(Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('index.index');
    } else {
        return redirect()->route('entry.login');
    }
   }

   public function register(Request $request) {

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
}
