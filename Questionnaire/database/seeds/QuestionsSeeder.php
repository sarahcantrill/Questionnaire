<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['questionnaire_id' => 1, 'question-text' => 'What colour hair do you have? '],
            ['questionnaire_id' => 1, 'question-text' => 'Where did you go on holiday? '],
            ['questionnaire_id' => 1, 'question-text' => 'Have you gone for a walk today? '],
            ['questionaire_id' => 1, 'question-text' => 'How many driving test have you done? '],
            ['questionnaire_id' => 1, 'question-text' => 'How was your day today? '],
        ]);
    }
}