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
    return 'hello world';
});

$app->get('user', function(){
    return 'user';
});

$app->get('user/{id}', function($id){
    return 'user'+$id;
});

$app->get('user/{id}', 'App\Http\Controllers\UserController@showProfile');
