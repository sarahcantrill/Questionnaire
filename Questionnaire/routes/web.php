<?php
use App\Http\Controllers\SelectQuestionnaireController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

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
//Route::resource('/resources/views/createquestionnaire', 'QuestionnaireController' );
Route::resource('questionnaires', 'QuestionnaireController');

//select questionnaire route
//route for select from tut
Route::resource('select', 'SelectQuestionnaireController');
//Route::get('/selectquestionnaire', 'SelectQuestionnaireController@index')->name('selectquestionnaire.index');

Route::get('/selectquestionnaire', [SelectQuestionnaireController::class, 'index'])->name('selectquestionnaire');

//shows questions w the questionnaire clicked id
//Route::get('questionnaire/{id}/questions', [QuestionController::class, 'showQuestions']);
Route::get('/questions', [QuestionController::class, 'index'])->name('questions');

//i cant remember what this does ngl
Route::post('/save-questionnaire', 'QuestionnaireController@store')->name('save.questionnaire');

Route::resource('responses', 'ResponseController');

//store answeres
Route::post('/submit-responses', [ResponseController::class, 'store'])->name('responses.store');

//displays responses for specific id
Route::get('/responses/{id}', [ResponseController::class, 'show'])->name('responses.show');


//Route::resource('/admin/questionnaire', 'QuestionnaireController' );
