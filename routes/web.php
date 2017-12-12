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

$router->get('/', function () use ($router) { 
    $product = app('App\Http\Controllers\ProductController')->getProduct();
    return view('index')->with('product',$product);
});

$router->get('/cart', 'ProductController@getProductById');
$router->get('/newsletter','ProductController@subscribe');
