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

//test routes
$app->get('exoTest', 'App\Http\Controllers\ExoTestController@test');

//testson routes
$app->get('son', 'App\Http\Controllers\sonController@test');

//Users routes
$app->get('users', 'App\Http\Controllers\UserController@getAllProfile');
$app->get('dashboard', 'App\Http\Controllers\UserController@dashboard');
$app->delete('users', 'App\Http\Controllers\UserController@deleteAllUsers');

// Authentification system
$app->post('signup', 'App\Http\Controllers\UserController@addUser');
$app->get('signup', 'App\Http\Controllers\UserController@signup');
$app->get('login', 'App\Http\Controllers\UserController@login');
$app->post('login', 'App\Http\Controllers\UserController@loginAttempt');
$app->get('logout', 'App\Http\Controllers\UserController@logout');

$app->get('user/learner', 'App\Http\Controllers\UserController@showProfileLearners');
$app->get('user/teacher', 'App\Http\Controllers\UserController@showProfileTeachers');
$app->get('user/{id}', 'App\Http\Controllers\UserController@showProfile');

// enseigne routes
$app->get('enseigne', 'App\Http\Controllers\UserController@enseigne');

//fuzzy routes
$app->get('fuzzy/{nbErr}/{nbResp}/{time}/{timeAvg}', 'App\Http\Controllers\FuzzyController@evaluate');

// cours routes
$app->get('cours/{id}', 'App\Http\Controllers\CoursController@get');

// chapitres routes
$app->get('chapitre/{id}', 'App\Http\Controllers\ChapitreController@get');

// exercices routes
$app->get('exercice/{id}', 'App\Http\Controllers\ExerciceController@get');

// test routes
$app->get('test', 'App\Http\Controllers\UserController@test');
$app->get('pie', 'App\Http\Controllers\UserController@pie');
