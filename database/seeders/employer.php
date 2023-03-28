<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employer = [
            [
                'id' => 1,
                'companyName' => 'Curio',
                'websiteURL' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley',
                'user_Id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('employers')->insert($employer);
    }
}
