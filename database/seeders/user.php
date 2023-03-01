<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'name' => 'werknemer',
                'email' => 'werknemer@admin',
                'birthDate' => now(),
                'phoneNumber' => '0612345678',
                'adress' => 'meerkade 11 4567WD Roosendaal',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus luctus dictum ante, porta gravida velit. Praesent aliquet turpis vitae nulla dignissim tempus. Nullam volutpat erat id convallis vulputate. Morbi auctor nulla eu neque mollis tincidunt. Morbi et arcu congue, luctus leo a, euismod massa. Donec urna sem, ornare sit amet aliquam sit amet, scelerisque eget arcu. Nullam facilisis quis odio.',
                'password' => bcrypt('adminadmin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'werkgever',
                'email' => 'werkgever@admin.com',
                'birthDate' => now(),
                'phoneNumber' => '0612345671',
                'adress' => 'achtersteven 71 9275BF Eindhoven',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus luctus dictum ante, porta gravida velit. Praesent aliquet turpis vitae nulla dignissim tempus. Nullam volutpat erat id convallis vulputate. Morbi auctor nulla eu neque mollis tincidunt. Morbi et arcu congue, luctus leo a, euismod massa. Donec urna sem, ornare sit amet aliquam sit amet, scelerisque eget arcu. Nullam facilisis quis odio.',
                'password' => bcrypt('adminadmin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
