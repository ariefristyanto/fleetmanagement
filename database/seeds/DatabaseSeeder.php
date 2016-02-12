<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('RoleTableSeeder');
        $this->call('PermissionTableSeeder');

        if( App::environment() === 'development' )
        {
            $this->call('CompanyTableSeeder');
            $this->call('PermissionRoleTableSeeder');
            $this->call('UserTableSeeder');
        }

        Model::reguard();
    }
}
