<?php


$router->get('/', function () {
    return view('welcome');
});

$router->resource('topics', 'TopicController');
$router->resource('addresses', 'AddressController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
