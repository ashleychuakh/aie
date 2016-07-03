<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_id');
            $table->string('paypal_id');
            $table->string('amount');
            $table->string('type');
            $table->string('status');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('appointment_id')->unsigned();
            $table->foreign('appointment_id')->references('id')->on('appointments');
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
        Schema::drop('transactions');
    }
}