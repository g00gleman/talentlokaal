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
        ];
        DB::table('users')->insert($users);
    }
}
