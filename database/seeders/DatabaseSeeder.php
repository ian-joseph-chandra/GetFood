<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(MenuCategorySeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartItemSeeder::class);
    }
}
