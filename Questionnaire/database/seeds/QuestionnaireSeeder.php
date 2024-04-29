<?php

use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire')->insert([
                ['title' => 'Questionnaire 1'],
                ['title' => 'Questionnaire 2'],
                ['title' => 'Questionnaire 3'],
                
            ]);



    }
}

//factory ??
//factory(Questionnaire::class, 5)->create();
