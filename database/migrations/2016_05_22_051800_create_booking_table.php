<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('booking_time');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('users');
            $table->integer('id_restoran')->unsigned();
            $table->foreign('id_restoran')->references('id')->on('restoran');
            $table->integer('people')->unsigned();
            $table->enum('status',array('0', '1'))->default('0');


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
        Schema::drop('booking');
    }
}
