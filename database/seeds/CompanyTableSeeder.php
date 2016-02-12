<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'PT Company One',
            'address' => 'Jl Satu No 34, Jakarta Barat, Indonesia',
            'phone' => '111',
            'fax' => '',
            'theme' => 'default',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('companies')->insert([
            'name' => 'PT Company Two',
            'address' => 'Jl Dua No 26, Jakarta Barat, Indonesia',
            'phone' => '222',
            'fax' => '',
            'theme' => 'red',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
