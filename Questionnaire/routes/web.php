<?php
use App\Http\Controllers\SelectQuestionnaireController;
use App\Http\Controllers\QuestionController;
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
//route for select from tut
Route::resource('select', 'SelectQuestionnaireController');
//Route::get('/selectquestionnaire', 'SelectQuestionnaireController@index')->name('selectquestionnaire.index');

Route::get('/selectquestionnaire', [SelectQuestionnaireController::class, 'index'])->name('selectquestionnaire');

//shows questions w the questionnaire clicked id
//Route::get('questionnaire/{id}/questions', [QuestionController::class, 'showQuestions']);
Route::get('/questions', [QuestionController::class, 'index'])->name('questions');

//Route::resource('/admin/questionnaire', 'QuestionnaireController' );
