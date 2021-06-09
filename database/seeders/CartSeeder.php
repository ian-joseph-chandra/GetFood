<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'customer_id' => 1,
                'branch_id' => 1
            ],
            [
                'customer_id' => 1,
                'branch_id' => 2
            ]
        ]);
    }
}
