<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // -------------ADMIN-----------------

        DB::table('permission_role')->insert([
            'permission_id' => 1,  // menu-company
            'role_id' => 1,        // role-admin
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,  // menu-vehicle
            'role_id' => 1,        // role-admin
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,  // menu-user
            'role_id' => 1,        // role-admin
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // -------------USER-----------------

        DB::table('permission_role')->insert([
            'permission_id' => 2,  // menu-vehicle
            'role_id' => 2,        // role-user
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


    }
}
