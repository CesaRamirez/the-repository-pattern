<?php

/* Welcome */
$router->get('/', function () {
    return view('welcome');
});

/* Auth */
$router->auth();

$router->middleware('auth')->group(function ($router) {
    /* Home */
    $router->get('home', 'HomeController@index')
           ->name('home');

    /* Topics */
    $router->resource('topics', 'TopicController')
           ->only('index');

    $router->get('topics/{slug}', 'TopicController@show')
           ->name('topics.show');

    /* Addresses */
    $router->resource('addresses', 'AddressController')
           ->only(['index', 'store', 'destroy']);
});
