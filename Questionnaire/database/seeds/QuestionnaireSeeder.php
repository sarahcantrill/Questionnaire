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
                ['id' => 1, 'title' => 'Questionnaire 1'],
                ['id' => 2, 'title' => 'Questionnaire 2'],
                ['id' => 3, 'title' => 'Questionnaire 3'],
            ]);



    }
}

//factory ??
//factory(Questionnaire::class, 5)->create();
