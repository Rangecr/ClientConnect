<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Log;
use App\Models\Ticket;

class LogController extends Controller
{
    public function log_add(Request $request) {

        $log = new Log();
        $log->id = rand('10000', '99999');
        $log->cust_id = $request->input('cust_id');
        $log->type = $request->input('type');
        $log->notes = $request->input('notes');

        $log->save();

        return redirect()->route('log.logs')->with('alert', 'success');

    }
}
