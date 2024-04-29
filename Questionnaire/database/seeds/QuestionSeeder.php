<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([
            ['question-id' => 1, 'question-text' => 'What colour hair do you have? '],
            ['question-id' => 2, 'question-text' => 'Where did you go on holiday? '],
            ['question-id' => 3, 'question-text' => 'Have you gone for a walk today? '],
            ['question-id' => 4, 'question-text' => 'How many driving test have you done? '],
            ['question-id' => 5, 'question-text' => 'How was your day today? '],
        ]);


    }
}
