<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            [
                'restaurant_id' => 1,
                'location' => 'GongGuan',
                'rating_average' => 4.8,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 1,
                'location' => 'ShiDa',
                'rating_average' => 4.5,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 2,
                'location' => 'ShiDa',
                'rating_average' => 4.2,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 2,
                'location' => 'Gongguan',
                'rating_average' => 4.6,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 3,
                'location' => 'Shida',
                'rating_average' => 4.9,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 3,
                'location' => 'Gongguan',
                'rating_average' => 4.7,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 4,
                'location' => 'Gongguan',
                'rating_average' => 4.4,
                'rating_quantity' => 1
            ],
            [
                'restaurant_id' => 4,
                'location' => 'Gongguan',
                'rating_average' => 4.5,
                'rating_quantity' => 1
            ]
        ]);
    }
}
