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

    $router->group(['prefix' => 'api'], function () use ($router) {
        //users
        $router->get('users', 'UserController@showUsers');
        $router->post('createUser', 'UserController@createUser');
        $router->get('editUser/{id}', 'UserController@editUser');
        $router->put('updateUser/{id}', 'UserController@updateUser');
        $router->delete('deleteUser/{id}', 'UserController@deleteUser');

        //products

        $router->get('products', 'ProductController@showProducts');
        $router->post('createProduct', 'ProductController@createProduct');
        $router->get('editProduct/{id}', 'ProductController@editProduct');
        $router->put('updateProduct/{id}', 'ProductController@updateProduct');
        $router->delete('deleteProduct/{id}', 'ProductController@deleteProduct');

        //orders

        $router->get('orders', 'OrderController@showOrders');
        $router->post('createOrder', 'OrderController@createOrder');
        $router->get('editOrder/{id}', 'OrderController@editOrder');
        $router->put('updateOrder/{id}', 'OrderController@updateOrder');
        $router->delete('deleteOrder/{id}', 'OrderController@deleteOrder');
    });

