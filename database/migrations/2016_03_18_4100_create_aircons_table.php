<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aircons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->string('model');
            $table->string('brand');
            $table->string('service_performed');
            $table->string('purchased_date');
            $table->string('warranty_start_date');
            $table->string('warranty_end_date');
            $table->string('service_history');
            $table->string('in_door_location');
            $table->string('status');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aircons');
    }
}
