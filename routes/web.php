<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('entry.login');
});

Route::post('/login', [UserController::class, 'createAduan']);
