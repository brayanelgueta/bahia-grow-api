<?php

namespace App\Http\Controllers;
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

$router->group(['middleware' => ['CorsMiddleware']], function () use ($router) {
    $router->group(['prefix' => 'api'], function () use ($router) {
        $router->get('usuarios', 'UserController@mostrarUsuarios');
    });
});

