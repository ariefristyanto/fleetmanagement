<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        DB::table('roles')->insert([
            'name' => 'role-admin',
            'display_name' => 'Company Admin',
            'description' => 'This role has admin access',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // ID 2
        DB::table('roles')->insert([
            'name' => 'role-user',
            'display_name' => 'Company User',
            'description' => 'This role has standard access',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
