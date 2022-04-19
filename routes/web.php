<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


    //users
    Route::prefix('api')->group(function () {

    ROUTE::get('users', [UserController::class, 'showUsers']);
    ROUTE::post('createUser', [UserController::class, 'createUser']);
    ROUTE::get('editUser/{id}', [UserController::class, 'editUser']);
    ROUTE::put('updateUser/{id}', [UserController::class, 'updateUser']);
    ROUTE::delete('deleteUser/{id}', [UserController::class, 'deleteUser']);

    
    //products

    ROUTE::get('products', [ProductController::class, 'showProducts']);
    ROUTE::post('createProduct', [ProductController::class, 'createProduct']);
    ROUTE::get('editProduct/{id}', [ProductController::class, 'editProduct']);
    ROUTE::put('updateProduct/{id}', [ProductController::class, 'updateProduct']);
    ROUTE::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct']);

    //orders

    ROUTE::get('orders', [OrderController::class, 'showOrders']);
    ROUTE::post('createOrder', [OrderController::class, 'createOrder']);
    ROUTE::get('editOrder/{id}', [OrderController::class, 'editOrder']);
    ROUTE::put('updateOrder/{id}', [OrderController::class, 'updateOrder']);
    ROUTE::delete('deleteOrder/{id}', [OrderController::class, 'deleteOrder']);
});
