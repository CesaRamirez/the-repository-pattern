<?php


$router->get('/', function () {
    return view('welcome');
});


$router->auth();

$router->middleware('auth')->group(function ($router) {
    $router->get('/home', 'HomeController@index')->name('home');
    $router->resource('topics', 'TopicController')->except('show');
    $router->get('topics/{slug}', 'TopicController@show')->name('topics.show');
    $router->resource('addresses', 'AddressController');
});
