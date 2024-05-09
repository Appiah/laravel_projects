<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Later we would need to update all the other table id on the element of 'foreign' value
     * and for proper validation purposes.
     * $table->foreign('user_id')->references('id')->on('users');
     * and for the rest of the other tables.
     * 
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();//later on user_id to be linked here and we would remove the any column info here that can be rather found in the users tbl.
            $table->string('socket_id')->unique();//this is to help with a very firm sockets live update update manage in case where applicable without missing a beat on any life updates the user has expressed interest in having whiles using the service. This is deeply linked to all things notifications pre and post usage of the service.
            $table->string('pocket_id')->unique();//a very quick way of dealing with refunds and rewards where applicable : whether financially : { fiat, non-fiat, or-batter }
            $table->string('settings_n_preferences_id');//this is to help keep track user's or customer's settings in the app usage : a dedicated table would be used to help keep track of these.
            $table->string('payments_n_preferences_id');//this is to help manage and keep track of all things payments so far as this user is concerned : a dedicated table for this would be created.
            $table->string('delivery_n_preferences_id');//all things related to physical delivery of items settings, preferences and or configurations : things such as other addresses may be covered in the parent "delivery" table
            $table->string('trnx_rules_id');//this to help manage all and any rules with regards elements of transactions as far as this customer is concerned at various levels ( trnx_period & trnx_period_val may be covered by the table(s) to handle trnx_rules)
            $table->string('kyc_id');//in some instance of certain purchase, a kyc would be needed
            $table->string('kyb_id');//in the instance of a user deciding to be a merchant
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');//may be covered by the "kyc" tbl
            $table->string('gender');//may be covered by the "kyc" tbl
            $table->string('email')->unique();
            $table->string('address_def');
            $table->string('language_code')->default('en');
            $table->string('phone_00_country_call_code');
            $table->string('phone_00')->unique();
            $table->string('country_id')->default('1');//linked to country table
            $table->string('currency_id')->default('1');//linked to currency table
            $table->string('referral_program_id');//to help with kola-place-app referral program
            $table->string('devices');//would be a set of device ids for helping with elements of security
            $table->string('fingerprints');//would be actual hashed fingerprint data of customer for verifying certain critical security or regulatory policy requirements as far as the customer and his or her purchase is concerned.
            $table->string('last_login');//timestamp of last login to help with lots of things such as security, marketing, sales, etc.
            $table->string('token_type')->default('1');//could be dynamic for other uses
            $table->string('token_val');//the actual token value. One token instance after the prior one is dealt with and properly logged into a dedicated tokens table.
            $table->string('trnx_period');//H:hourly, d:daily, m:monthly, Y:yearly
            $table->string('trnx_per_period');//the value for the specific period
            $table->string('active')->default('1');
            $table->string('deleted')->default('0');
            $table->string('reported')->default('0');
            $table->string('blocked')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
