<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//welcome routes
$app->get('/', 'App\Http\Controllers\WelcomeController@test');


//Users routes
$app->get('users', 'App\Http\Controllers\UserController@getAllProfile');
$app->get('user/learner', 'App\Http\Controllers\UserController@showProfileLearners');
$app->delete('user/teacher', 'App\Http\Controllers\UserController@deleteAllUsers');
$app->get('user/teacher', 'App\Http\Controllers\UserController@showProfileTeachers');
$app->get('user/{id}', 'App\Http\Controllers\UserController@showProfile');

// enseigne routes
$app->get('enseigne', 'App\Http\Controllers\UserController@enseigne');

//fuzzy routes
$app->get('fuzzy/{nbErr}/{nbResp}/{time}/{timeAvg}', 'App\Http\Controllers\FuzzyController@evaluate');

// test routes
$app->get('test', 'App\Http\Controllers\UserController@test');
