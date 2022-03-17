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

$router->group(['middleware' => 'auth:api'], function () use ($router) {
    $router->get('product', ['uses' => 'ProductController@index']);
    $router->post('product', ['uses' => 'ProductController@store']);
    $router->patch('product/{product_no}', ['uses' => 'ProductController@update']);
    $router->get('product/{product_no}', ['uses' => 'ProductController@show']);
    $router->delete('product/{product_no}', ['uses' => 'ProductController@destroy']);
});
