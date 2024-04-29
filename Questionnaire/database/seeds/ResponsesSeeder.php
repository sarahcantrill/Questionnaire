<?php

use Illuminate\Database\Seeder;

class ResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('responses')->insert([
            ['question_id' => 1, 'response-text' => 'Red '],
            ['question_id' => 2, 'response-text' => 'Center Parcs '],
            ['question_id' => 3, 'response-text' => 'No '],
            ['question_id' => 4, 'response-text' => '2'],
            ['question_id' => 5, 'response-text' => 'Good'],
        ]);
    }
}
