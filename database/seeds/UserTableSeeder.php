<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Company 1 Users
        DB::table('users')->insert([
            'role_id' => 1,
            'company_id' => 1,
            'first_name' => 'Admin 1',
            'last_name' => '',
            'email' => 'admin@company1.com',
            'password' => bcrypt('123456Qz!'),
            'enabled' => true,
            'timezone' => 'Asia/Jakarta',
            'locale' => 'en',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'company_id' => 1,
            'first_name' => 'User 1',
            'last_name' => '',
            'email' => 'user@company1.com',
            'password' => bcrypt('123456Qz!'),
            'enabled' => true,
            'timezone' => 'Asia/Jakarta',
            'locale' => 'en',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // Company 2 Users
        DB::table('users')->insert([
            'role_id' => 1,
            'company_id' => 2,
            'first_name' => 'Admin 2',
            'last_name' => '',
            'email' => 'admin@company2.com',
            'password' => bcrypt('123456Qz!'),
            'enabled' => true,
            'timezone' => 'Asia/Singapore',
            'locale' => 'id',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'company_id' => 2,
            'first_name' => 'User 2',
            'last_name' => '',
            'email' => 'user@company2.com',
            'password' => bcrypt('123456Qz!'),
            'enabled' => true,
            'timezone' => 'Asia/Singapore',
            'locale' => 'id',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
