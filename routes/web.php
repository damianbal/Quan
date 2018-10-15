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
Route::get('/questions/{question}', 'QuestionController@show')->name('question.show');
Route::get('/ask', 'QuestionController@create')->name('question.create')->middleware('auth');
Route::post('/question', 'QuestionController@store')->name('question.store')->middleware('auth');
Route::delete('/questions/{question}', 'QuestionController@destroy')->name('question.delete')->middleware('auth');

 /*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
 */
Route::get('/users/{user}', 'UserController@show')->name('user.show');

/*
|--------------------------------------------------------------------------
| Category
|--------------------------------------------------------------------------
 */
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');

 /*
|--------------------------------------------------------------------------
| Answer
|--------------------------------------------------------------------------
 */
Route::post('/questions/{question}/answers', 'AnswerController@store')->name('answer.store')->middleware('auth');
Route::delete('/answers/{answer}', 'AnswerController@destroy')->name('answer.delete')->middleware('auth');
Route::post('/answers/{answer}/upvote', 'AnswerController@upvote')->name('answer.upvote')->middleware('auth');