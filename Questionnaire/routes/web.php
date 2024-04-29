<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//create questionnaire route
Route::resource('/resources/views/createquestionnaire', 'QuestionnaireController' );
Route::resource('questionnaires', 'QuestionnaireController');

//select questionnaire route
//Route::resource('/resources/views/selectquestionnaire', 'SelectQuestionnaireController' );
//Route::resource('questionnaires', 'QuestionnaireController');
//Route::resource('/resources/views/selectquestionnaire', 'SelectQuestionnaireController' );
//Route::get('/show-all-questionnaires', [QuestionnaireController::class, 'showAll'])->name('questionnaires.showAll');
//route for select from tut
Route::resource('select', 'SelectQuestionnaireController');

//Route::resource('/admin/questionnaire', 'QuestionnaireController' );
