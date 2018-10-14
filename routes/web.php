<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Main
|--------------------------------------------------------------------------
 */
Route::get('/', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
 */
Auth::routes();
Route::get('/sign-in', 'AuthController@signIn')->name('auth.sign_in');
Route::get('/sign-up', 'AuthController@signUp')->name('auth.sign_up');
Route::get('/sign-out', 'AuthController@signOut')->name('auth.sign_out')->middleware('auth');


/*
|--------------------------------------------------------------------------
| Question
|--------------------------------------------------------------------------
 */
Route::get('/question/{question}', 'QuestionController@show')->name('question.show');
Route::get('/question/create', 'QuestionController@create')->name('question.create')->middleware('auth');

 /*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
 */

 /*
|--------------------------------------------------------------------------
| Answer
|--------------------------------------------------------------------------
 */
Route::post('/question/{question}/answers', 'AnswerController@store')->name('answer.store')->middleware('auth');