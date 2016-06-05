<?php

use Illuminate\Database\Seeder;

class DBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restaurants')->insert([
          'nama' => 'Mad Dog',
          'email' => 'maddog@gmail.com',
          'password' => bcrypt('administrator'),
      ]);

      DB::table('users')->insert([
          'name' => 'Ariantha Sentanu',
          'email' => 'wysentanu@gmail.com',
          'password' => bcrypt('traxex95'),
          'phone' => '081558585823',
          'credits' => 1000,
      ])
    }
}
