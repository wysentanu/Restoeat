<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_booking', function (Blueprint $table) {
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menu');
            $table->integer('id_booking')->unsigned();
            $table->foreign('id_booking')->references('id')->on('booking');
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
        Schema::drop('menu_booking');
    }
}
