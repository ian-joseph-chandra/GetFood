<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'category_id' => 1,
                'name' => 'Zuper Krunch',
                'description' => '',
                'price' => 70
            ],
            [
                'category_id' => 1,
                'name' => 'Chicken Fillet',
                'description' => '',
                'price' => 40
            ],
            [
                'category_id' => 1,
                'name' => 'Fish Fillet',
                'description' => '',
                'price' => 30
            ],
            [
                'category_id' => 2,
                'name' => 'Original Chicken',
                'description' => '',
                'price' => 30
            ],
            [
                'category_id' => 2,
                'name' => 'Crispy Chicken',
                'description' => '',
                'price' => 40
            ],
            [
                'category_id' => 2,
                'name' => 'Mala Crispy Chicken',
                'description' => '',
                'price' => 45
            ],
            [
                'category_id' => 3,
                'name' => 'Milk Tea',
                'description' => '',
                'price' => 35
            ],
            [
                'category_id' => 3,
                'name' => '7-Up',
                'description' => 'Soft Drinks',
                'price' => 40
            ],
            [
                'category_id' => 3,
                'name' => 'Pepsi',
                'description' => 'Soft Drinks',
                'price' => 40
            ]
        ]);
    }
}
