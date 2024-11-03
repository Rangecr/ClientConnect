<?php

use App\Models\Log;
use App\Models\User;

use App\Models\Ticket;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Password_reset_token;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    Password_reset_token::where('expires_at', '<', now())->delete();
    return view('entry.login');
})->name('entry.login');

Route::post('/login', [UserController::class, 'login']);




Route::get('/login/resetpassword', function () {
    return view('entry.reset_pass_1');
})->name('entry.reset_pass_1');

Route::post('/login/enteremail', [UserController::class, 'send_reset_code'])->name('enteremail');

Route::get('/login/codesent', function () {
    return view('entry.reset_pass_2');
})->name('entry.reset_pass_2');

Route::post('/login/entercode', [UserController::class, 'verify_code'])->name('entercode');

Route::get('/login/newpassword/{email}', function ($email) {
    return view('entry.reset_pass_3', ['email' => $email]);
})->name('entry.reset_pass_3');

Route::post('/login/enterpassword', [UserController::class, 'update_password'])->name('enterpassword');





Route::get('/register/page', function () {
    return view('entry.register');
})->name('entry.register');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/profile/{user}', function(User $user) {
    return view('user.profile', ['user' => $user]);
})->name('user.profile');

Route::post('/logout', function(Request $request ) {
    
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect()->route('entry.login');
})->name('user.logout');

Route::get('/index/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $users = User::all();
        $customers = Customer::all();
        $logs = Log::all();
        $tickets = Ticket::all();

        $emailCount = Log::where('type', 'Email')->count();
        $callCount = Log::where('type', 'Call')->count();
        $meetingCount = Log::where('type', 'Meeting')->count();

        $openCount = Ticket::where('status', 'Open')->count();

        return view('index.index', [
            'user' => $user,
            'users' => $users,
            'customers' => $customers,
            'logs' => $logs,
            'tickets' => $tickets,
            'emailCount' => $emailCount,
            'callCount' => $callCount,
            'meetingCount' => $meetingCount,
            'openCount' => $openCount
        ]);
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

Route::get('/customer/page/{customer}', function(Customer $customer){
    
    if (auth()->check()) {

        $user = auth()->user();

        $users = User::all();

        $customer = $customer->load('logs', 'tickets');
        
        return view('customer.customer', ['user' => $user, 'customer' => $customer, 'users' => $users]);

     } else {
            return redirect()->route('entry.login');
        }

})->name('customer.customer');

Route::post('/customer/add', [CustomerController::class, 'customer_add'])->name('customer.add');

Route::post('/customer/delete', [CustomerController::class, 'customer_delete'])->name('customer.delete');

Route::get('/log/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $customers = Customer::all();

        $logs = Log::with('customer')->get();

        $emails = Log::where('type', 'email')->with('customer')->get();
        $calls = Log::where('type', 'call')->with('customer')->get();
        $meetings = Log::where('type', 'meeting')->with('customer')->get();

        return view('log.logs', [
            'user' => $user,
            'customers' => $customers,
            'logs' => $logs,
            'emails' => $emails,
            'calls' => $calls,
            'meetings' => $meetings
        ]);
    } else {
        return redirect()->route('entry.login');
    }
})->name('log.logs');

Route::post('/log/add' , [LogController::class, 'log_add'])->name('log.add');

Route::post('/log/delete', [LogController::class, 'log_delete'])->name('log.delete');

Route::post('/helpdesk/delete', [TicketController::class, 'ticket_delete'])->name('ticket.delete');

Route::get('/helpdesk/page', function () {

    if (auth()->check()) {

        $user = auth()->user();

        $users = user::all();

        $customers = Customer::all();

        $tickets = Ticket::with('user', 'customer')->get();

        $openCount = Ticket::where('status', 'Open')->count();

        return view('helpdesk.helpdesk', [
            'tickets' => $tickets, 
            'customers' => $customers,
            'user' => $user,
            'users' => $users,
            'openCount' => $openCount
        ]);

    } else {
        return redirect()->route('entry.login');
    }
})->name('helpdesk.helpdesk');

Route::post('/ticket/add' ,[TicketController::class, 'ticket_add'])->name('ticket.add');

Route::get('/helpdesk/ticket/{ticket}', function(Ticket $ticket){
    
    if (auth()->check()) {

        $user = auth()->user();
        
        return view('helpdesk.ticket', ['user' => $user, 'ticket' => $ticket]);

     } else {
            return redirect()->route('entry.login');
        }

})->name('helpdesk.ticket');

Route::get('/ticket/update/{ticket}', [TicketController::class, 'ticket_update'])->name('ticket.update');




Route::post('/report/customers' ,[ReportController::class, 'report_customer'])->name('report.customer');
