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
                'image' => null,
                'image_type' => null
//                'image' => file_get_contents('public/images/restaurants/logo/KFC.png'),
//                'image_type' => ('png')
            ],
            [
                'name' => 'Ichiran',
                'email' => 'resto@ichiran.com',
                'password' => 'ichiran',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'McD',
                'email' => 'resto@mcd.com',
                'password' => 'mcd',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'Sukiya',
                'email' => 'resto@sukiya.com',
                'password' => 'sukiya',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'BK',
                'email' => 'resto@bk.com',
                'password' => 'bk',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'Chicken Master',
                'email' => 'resto@chimas.com',
                'password' => 'chimas',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'Kebuke',
                'email' => 'resto@kebuke.com',
                'password' => 'kebuke',
                'image' => null,
                'image_type' => null
            ],
            [
                'name' => 'Chatime',
                'email' => 'resto@chatime.com',
                'password' => 'chatime',
                'image' => null,
                'image_type' => null
            ]
        ]);
    }
}
