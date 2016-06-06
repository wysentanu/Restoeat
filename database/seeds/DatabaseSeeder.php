<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
            'first_name' => 'Ariantha',
            'last_name' => 'Sentanu',
            'email' => 'wysentanu@gmail.com',
            'password' => bcrypt('traxex95'),
            'phone' => '081558585823',
            'credits' => 1000,
        ]);
    }
}
