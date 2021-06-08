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
                'name' => 'Gabrielle',
                'phone_number' => '081617',
                'email' => 'gabrielle@user.com',
                'password' => '123'
            ],
        ]);
    }
}
