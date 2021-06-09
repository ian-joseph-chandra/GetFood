<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            [
                'user_id' => 2,
                'plate_vehicle' => 'AB123'
            ]
        ]);
    }
}
