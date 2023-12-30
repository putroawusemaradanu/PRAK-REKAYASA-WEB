<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('tokohp', ['uses' => 'TokohpController@showAll']);
    $router->get('tokohp/{id}', ['uses' => 'TokohpController@showOne']);
    $router->post('tokohp', ['uses' => 'TokohpController@create']);
    $router->delete('tokohp/{id}', ['uses' => 'TokohpController@delete']);
    $router->put('tokohp/{id}', ['uses' => 'TokohpController@update']);
    
   // jwt-auth
$router->post('login', ['uses' => 'AuthController@login']);
$router->post('logout', ['uses' => 'AuthController@logout']);
$router->post('refresh', ['uses' => 'AuthController@refresh']);
$router->post('user-profile', ['uses' => 'AuthController@me']);
});

    