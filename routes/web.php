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
    return view('home');
});

Route::get('/data-tables', function(){
  return view('tables');
});

Route::get('/questions', 'QuestionController@index');

Route::get('/questions/create', 'QuestionController@create');

Route::post('/questions', 'QuestionController@store');

Route::get('/answer/{id}', ['uses' => 'AnswerController@index']);

Route::post('/answer/{id}', ['uses' => 'AnswerController@store']);
