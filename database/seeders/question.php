<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $questions = [
            [
                'id' => 1,
                'question' => 'Vraag 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'question' => 'Vraag 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'question' => 'Vraag 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'question' => 'Vraag 4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'question' => 'Vraag 5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],            [
                'id' => 6,
                'question' => 'Vraag 6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'question' => 'Vraag 6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'question' => 'Vraag 7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('questions')->insert($questions);
    }
}
