<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateBookingMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_menu', function (Blueprint $table) {
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menus')->onDelete('cascade');
            $table->integer('id_booking')->unsigned();
            $table->foreign('id_booking')->references('id')->on('bookings')->onDelete('cascade');
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
        Schema::drop('booking_menu');
    }
}
