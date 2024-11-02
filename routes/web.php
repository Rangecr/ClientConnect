<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('entry.login');
})->name('entry.login');

Route::post('/login', [UserController::class, 'login']);

Route::get('/register/page', function () {
    return view('entry.register');
})->name('entry.register');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/index', function () {

    if (auth()->check()) {
        $user = auth()->user();
        return view('index.index', ['user' => $user]);
    } else {
        return redirect()->route('entry.login');
    }

})->name('index');
