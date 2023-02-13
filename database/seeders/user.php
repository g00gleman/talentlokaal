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
                'adress' => 'meerkade 11 4567WD Roosendaal',
                'password' => bcrypt('adminadmin')
            ],
            [
                'id' => 2,
                'name' => 'Rick',
                'email' => 'admin@admin.com',
                'birthDate' => now(),
                'phoneNumber' => '0612345671',
                'adress' => 'achtersteven 71 9275BF Eindhoven',
                'password' => bcrypt('adminadmin')
            ],
        ];
        DB::table('users')->insert($users);
    }
}
