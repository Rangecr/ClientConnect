<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Log;
use App\Models\Ticket;

class CustomerController extends Controller
{
    public function customer_add(Request $request) {

        $customer = new Customer();
        $customer->id = rand('10000', '99999');
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->p_numb = $request->input('p_numb');
        $customer->address = $request->input('address');
        $customer->notes = $request->input('notes');

        $customer->save();

        return redirect()->route('customer.customers')->with('alert', 'success');
    }

    public function customer_delete(Request $request) {

        $ids = $request->input('ids');

        if (!empty($ids)) {

            Customer::whereIn('id', $ids)->delete();

            return redirect()->route('customer.customers')->with('alert', 'delete');
        } else {
            return redirect()->route('customer.customers')->with('alert', 'empty');
        }
    }
    
}
