<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->integer('merchant_id')->unsigned();
            
            $table->integer('customer_id')->unsigned();
            //$table->foreignId('customer_id')->constrained();
            
            $table->integer('related_invoice_id')->default(0);
            $table->string('payments_ratios_id')->default(0);
            $table->date('date');
            $table->date('due_date');
            $table->boolean('paid')->default(false);
            $table->boolean('closed')->default(false);
            $table->string('reference')->nullable();
            $table->text('terms_n_conditions');
            $table->text('customer_notes');
            $table->text('merchant_notes');
            $table->double('sub_total');
            $table->double('taxes');
            $table->double('other_charges');
            $table->double('discount')->default(0);
            $table->double('grand_total');
            $table->integer('active')->default(1);
            $table->integer('reported')->default(0);
            $table->integer('withheld')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
