<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TicketController;

use App\Models\User;
use App\Models\Customer;
use App\Models\Log;
use App\Models\Ticket;

Route::get('/', function () {
    return view('entry.login');
})->name('entry.login');

Route::post('/login', [UserController::class, 'login']);

Route::get('/register/page', function () {
    return view('entry.register');
})->name('entry.register');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/index/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        return view('index.index', ['user' => $user]);
    } else {
        return redirect()->route('entry.login');
    }

})->name('index.index');

Route::get('/customers/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $customers = Customer::all();

        return view('customer.customers', ['customers' => $customers, 'user' => $user]);
    } else {
        return redirect()->route('entry.login');
    }
})->name('customer.customers');

Route::post('/customer/add', [CustomerController::class, 'customer_add'])->name('customer.add');

Route::get('/log/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $customers = Customer::all();

        $emails = Log::where('type', 'email')->with('customer')->get();
        $calls = Log::where('type', 'call')->with('customer')->get();
        $meetings = Log::where('type', 'meeting')->with('customer')->get();

        return view('log.logs', [
            'user' => $user,
            'customers' => $customers,
            'emails' => $emails,
            'calls' => $calls,
            'meetings' => $meetings
        ]);
    } else {
        return redirect()->route('entry.login');
    }
})->name('log.logs');

Route::post('/log/add' , [LogController::class, 'log_add'])->name('log.add');

Route::get('/helpdesk/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $tickets = Ticket::all();

        return view('helpdesk.helpdesk', ['tickets' => $tickets, 'user' => $user]);
    } else {
        return redirect()->route('entry.login');
    }
})->name('helpdesk.helpdesk');
