<?php

namespace App\Http\Controllers;

use App\Models\Log;

use App\Models\User;

use App\Models\Ticket;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function report_customer(Request $request)
    {

        $start = $request->input('start');
        $end = $request->input('end');

        $startDate = Carbon::parse($start);
        $endDate = Carbon::parse($end);

        $customers = Customer::whereBetween('created_at', [$startDate, $endDate])->get();

        $pdf = Pdf::loadView('report.customers_report', compact('customers', 'startDate', 'endDate'));

        $pdf->setPaper('A4', 'potrait');

        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        return $pdf->download('customers_report.pdf');
    }
}
