<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

$router->get('/auth/index', 'AuthController@index');

$router->get('/auth/login', 'AuthController@login');

$router->post('/auth/login', 'AuthController@postLogin');

$router->get('/auth/register', 'AuthController@getRegister');

$router->post('/auth/register', 'AuthController@postRegister');

$router->get('/auth/logout', 'AuthController@getLogout');
