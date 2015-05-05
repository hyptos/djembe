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



$app->get('/', function() use ($app) {
    return 'hello worledddddd';
});

//Users routes
$app->get('users', 'App\Http\Controllers\UserController@getAllProfile');
$app->get('user/learner', 'App\Http\Controllers\UserController@showProfileLearners');
// a remplacer avec un $app->delete pour API REST
$app->get('user/teacherD', 'App\Http\Controllers\UserController@deleteAllUsers');
$app->get('user/teacher', 'App\Http\Controllers\UserController@showProfileTeachers');
$app->get('user/{id}', 'App\Http\Controllers\UserController@showProfile');
$app->get('test', 'App\Http\Controllers\UserController@test');
