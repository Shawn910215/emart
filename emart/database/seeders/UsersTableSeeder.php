<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'full_name' => 'Shawn Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '12345678',
                'role' => 'admin',
                'status' => 'active',

            ],
            //Vendor
            [
                'full_name' => 'Shawn Vendor',
                'username' => 'Vendor',
                'email' => 'Vendor@gmail.com',
                'password' => '12345678',
                'role' => 'Vendor',
                'status' => 'active',

            ],
            //Customer
            [
                'full_name' => 'Shawn Customer',
                'username' => 'Customer',
                'email' => 'Customer@gmail.com',
                'password' => '12345678',
                'role' => 'Customer',
                'status' => 'active',

            ],

        ]);
    }
}
