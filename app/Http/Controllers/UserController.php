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
        return 'hello';
    } else {
        return 'bye';
    }
   }
}
