<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        DB::table('permissions')->insert([
            'name' => 'menu-company',
            'display_name' => 'Company Menu',
            'description' => 'Allows user to access company menu.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // ID 2
        DB::table('permissions')->insert([
            'name' => 'menu-vehicle',
            'display_name' => 'Vehicle Menu',
            'description' => 'Allows user to access vehicle menu.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // ID 3
        DB::table('permissions')->insert([
            'name' => 'menu-user',
            'display_name' => 'User Menu',
            'description' => 'Allows user to access user menu.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
