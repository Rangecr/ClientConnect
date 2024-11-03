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
        $ticket->status = 'Open';
        $ticket->priority = $request->input('priority');

        $ticket->save();

        $page = $request->input('page');

        if ($page === 'customer') {
            return redirect()
            ->route('customer.customer', ['customer' => $ticket->cust_id])
            ->with('alert', 'success-ticket');
        }

        return redirect()->route('helpdesk.helpdesk')->with('alert', 'success');

    }

    public function ticket_delete(Request $request) {

        $ids = $request->input('ids');

        if (!empty($ids)) {

            Ticket::whereIn('id', $ids)->delete();

            return redirect()->route('helpdesk.helpdesk')->with('alert', 'delete');
        } else {
            return redirect()->route('helpdesk.helpdesk')->with('alert', 'empty');
        }
    }

    public function ticket_update(Request $request,Ticket $ticket) {
        $status = $request->input('status');

        $ticket->status = $status;
        
        $ticket->save();

        return redirect()->route('helpdesk.ticket', ['ticket' => $ticket->id])->with('alert', 'update');
    }
}
