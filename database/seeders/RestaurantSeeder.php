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
            ],
            [
                'name' => 'Ichiran',
                'email' => 'resto@ichiran.com',
                'password' => 'ichiran',
            ],
            [
                'name' => 'McD',
                'email' => 'resto@mcd.com',
                'password' => 'mcd',
            ],
            [
                'name' => 'Sukiya',
                'email' => 'resto@sukiya.com',
                'password' => 'sukiya',
            ],
            [
                'name' => 'BK',
                'email' => 'resto@bk.com',
                'password' => 'bk',
            ],
            [
                'name' => 'Chicken Master',
                'email' => 'resto@chimas.com',
                'password' => 'chimas',
            ],
            [
                'name' => 'Kebuke',
                'email' => 'resto@kebuke.com',
                'password' => 'kebuke',
            ],
            [
                'name' => 'Chatime',
                'email' => 'resto@chatime.com',
                'password' => 'chatime',
            ]
        ]);
    }
}
