<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name' => 'KFC',
                'email' => 'resto@kfc.com',
                'password' => 'kfc',
                'image' => 'images/restaurants/1/KFC.png',
            ],
            [
                'name' => 'Ichiran',
                'email' => 'resto@ichiran.com',
                'password' => 'ichiran',
                'image' => null
            ],
            [
                'name' => 'McD',
                'email' => 'resto@mcd.com',
                'password' => 'mcd',
                'image' => null
            ],
            [
                'name' => 'Sukiya',
                'email' => 'resto@sukiya.com',
                'password' => 'sukiya',
                'image' => null
            ],
            [
                'name' => 'BK',
                'email' => 'resto@bk.com',
                'password' => 'bk',
                'image' => null
            ],
            [
                'name' => 'Chicken Master',
                'email' => 'resto@chimas.com',
                'password' => 'chimas',
                'image' => null
            ],
            [
                'name' => 'Kebuke',
                'email' => 'resto@kebuke.com',
                'password' => 'kebuke',
                'image' => null
            ],
            [
                'name' => 'Chatime',
                'email' => 'resto@chatime.com',
                'password' => 'chatime',
                'image' => null
            ]
        ]);
    }
}
