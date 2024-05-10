<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceItemController extends Controller{
    
    public function getInvoiceItem($id){
        return view('invoicedetails');
    }

}
