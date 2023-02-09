<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin',
                'birthDate' => now(),
                'phoneNumber' => '0612345678',
                'city' => 'roosendaal',
                'street' => 'knipplein',
                'houseNumber' => '11',
                'postalCode' => '4751 PX',
                'password' => bcrypt('adminadmin')
            ],
            [
                'id' => 2,
                'name' => 'Rick',
                'email' => 'admin@admin.com',
                'birthDate' => now(),
                'phoneNumber' => '0612345671',
                'city' => 'breda',
                'street' => 'rodeweg',
                'houseNumber' => '6',
                'postalCode' => '4751 PD',
                'password' => bcrypt('adminadmin')
            ],
        ];
        DB::table('users')->insert($users);
    }
}
