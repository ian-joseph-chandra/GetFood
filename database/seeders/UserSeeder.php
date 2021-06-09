<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ian',
                'phone_number' => '081617',
                'email' => 'ian@gmail.com',
                'password' => '123'
            ],
            [
                'name' => 'Joseph',
                'phone_number' => '081616',
                'email' => 'joseph@gmail.com',
                'password' => '123'
            ]
        ]);
    }
}
