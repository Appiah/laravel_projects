<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller{
    
    public function getAllInvoices(){

        $invoices = Invoice::all();

        //ddd($invoices);

        //var_dump($invoices);

        //$invoices = Invoice::with('customer')->orderBy('id', 'DESC')->get();

        //$invoices = DB::select("SELECT * FROM invoices");

        //$invoices = DB::table('invoices')->get();

        //echo "<script>console.log('response from DB in \"InvoiceController\" ', ".$invoices.")</script>";


        return response()->json([
            'invoices' => $invoices
        ], 200);

    }

    public function getAllInvoicesView(){
        $invoicesAll = Invoice::all();
        return view('invoicelisttest', ['invoicesAll' => $invoicesAll]);
    }

}
