<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_details')->insert([
            [
                'menu_id' => 1,
                'cart_id' => 1,
                'quantity' => 2,
            ],
            [
                'menu_id' => 2,
                'cart_id' => 1,
                'quantity' => 1,
            ],
            [
                'menu_id' => 3,
                'cart_id' => 1,
                'quantity' => 3,
            ]
        ]);
    }
}
