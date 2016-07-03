<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paypal_ipm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ipm_track_id');
            $table->string('payment_status');
            $table->string('custom_code_ref')->unique();
            $table->string('payment_date');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('accounts');
            $table->integer('transaction_id')->unsigned();
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}