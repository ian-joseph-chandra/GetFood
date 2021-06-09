<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            [
                'name' => 'Order available',
                'description' => 'Customer just created an order to a restaurant'
            ],
            [
                'name' => 'Order is being processed',
                'description' => 'The order is being processed by the restaurant'
            ],
            [
                'name' => 'Order ready for pick up',
                'description' => 'Order is processed and waiting for driver to be picked up'
            ],
            [
                'name' => 'Order is being delivered',
                'description' => 'The driver is delivering the order to the customer'
            ],
            [
                'name' => 'Order is arrived',
                'description' => 'The driver has arrived to the customer place'
            ],
            [
                'name' => 'Order is finished',
                'description' => 'The customer has received the order'
            ]
        ]);
    }
}
