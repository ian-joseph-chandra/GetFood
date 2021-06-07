<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_categories')->insert([
            [
                'restaurant_id' => 1,
                'name' => 'Burgers'
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Chickens'
            ],
            [
                'restaurant_id' => 1,
                'name' => "Drinks"
            ]
        ]);
    }
}
