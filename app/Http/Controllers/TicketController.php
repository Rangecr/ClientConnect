<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Log;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function ticket_add(Request $request) {

        $ticket = new Ticket();
        $ticket->id = rand('10000', '99999');
        $ticket->cust_id = $request->input('cust_id');
        $ticket->user_id = $request->input('user_id');
        $ticket->title = $request->input('title');
        $ticket->description = $request->input('description');
        $ticket->status = 'open';
        $ticket->priority = $request->input('priority');

        $ticket->save();

        return redirect()->route('helpdesk.helpdesk')->with('alert', 'success');

    }
}
