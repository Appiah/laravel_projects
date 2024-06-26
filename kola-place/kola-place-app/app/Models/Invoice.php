<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model{

    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function invoiceMustHaveItems(){
        return $this->hasMany(InvoiceItem::class, 'invoice_id');
    }

}
