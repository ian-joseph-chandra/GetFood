<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'branch_id' => '1',
                'order_status_id' => 1,
                'customer_id' => 1,
                'driver_id' => 1,
                'order_price' => 140,
                'delivery_price' => 40
            ],
            [
                'branch_id' => '1',
                'order_status_id' => 1,
                'customer_id' => 1,
                'driver_id' => 1,
                'order_price' => 170,
                'delivery_price' => 40
            ]
        ]);
    }
}
