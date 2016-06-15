<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('slug_nama', 250);
            $table->string('alamat');
            $table->string('phone');
            $table->string('kota');
            $table->string('negara');
            $table->integer('category')->unsigned(); //1. fine dining, 2. fast food, 3. vegetarian
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_pic')->nullable();
            $table->text('description');
            $table->integer('credits')->unsigned();
            $table->rememberToken();
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
        Schema::drop('restaurants');
    }
}
