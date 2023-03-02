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
                'question' => 'Mijn ideale organisatie legt de nadruk op doelen stellen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie legt de nadruk op stabiliteit en efficientie',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie legt de nadruk op persoonlijke ontwikkeling',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie legt de nadruk op creativiteit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie staat voor waarden en tradities',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie staat voor saamhorigheid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie staat voor een gezonde planeet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Mijn ideale organisatie staat voor persoonlijke welvaart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'Ik vind het fijn als er wekelijks wordt vergaderd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        

        ];
        DB::table('questions')->insert($questions);
    }
}
