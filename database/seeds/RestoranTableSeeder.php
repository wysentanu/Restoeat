<?php

use Illuminate\Database\Seeder;

class RestoranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restorans')->insert([
          'nama' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('administrator'),
      ]);
    }
}
