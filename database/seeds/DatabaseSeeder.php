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
            'slug_nama' => 'mad-dog',
            'email' => 'maddog@gmail.com',
            'password' => bcrypt('administrator'),
        ]);

        DB::table('restaurants')->insert([
            'nama' => 'Warung Singaraja',
            'slug_nama' => 'warung-singaraja',
            'email' => 'wsingaraja@gmail.com',
            'password' => bcrypt('administrator'),
        ]);

        DB::table('restaurants')->insert([
            'nama' => 'Mac Teddy',
            'slug_nama' => 'mac-teddy',
            'email' => 'macteddy@gmail.com',
            'password' => bcrypt('administrator'),
        ]);

        DB::table('restaurants')->insert([
            'nama' => 'KFC',
            'slug_nama' => 'kfc',
            'email' => 'kfc@gmail.com',
            'password' => bcrypt('administrator'),
        ]);

        DB::table('restaurants')->insert([
            'nama' => 'Warung Minnasan',
            'slug_nama' => 'warung-minnasan',
            'email' => 'wrminna@gmail.com',
            'password' => bcrypt('administrator'),
        ]);

        DB::table('restaurants')->insert([
            'nama' => 'Hokaben Restaurant',
            'slug_nama' => 'hokaben-restaurant',
            'email' => 'hokaben@gmail.com',
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
