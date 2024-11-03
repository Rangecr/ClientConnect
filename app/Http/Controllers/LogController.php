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

        $page = $request->input('page');

        if($page === 'customer') {
            return redirect()
            ->route('customer.customer', ['customer' =>$log->cust_id])
            ->with('alert', 'success-log');
        }

        return redirect()->route('log.logs')->with('alert', 'success');

    }

    public function log_delete(Request $request) {
        $id = $request->input('id');
        $page = $request->input('page');

        Log::destroy($id);

        if ($page === 'customer') {
            $cust_id = $request->input('cust_id');
            return redirect()->route('customer.customer', ['customer' => $cust_id])->with('alert', 'delete');
        } else {
            return redirect()->route('log.logs')->with('alert', 'delete');
        }
    }
}
