<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller{
    
    public function getAllInvoices(){

        $invoices = Invoice::all();

        return response()->json([
            'invoices' => $invoices
        ], 200);

    }

    public function getAllInvoicesView(){
        //$invoices = Invoice::all();
        $invoices = Invoice::with('customer')->orderBy('id', 'DESC')->get();
        return view('invoicelisttest', ['invoices' => $invoices]);
    }

}
