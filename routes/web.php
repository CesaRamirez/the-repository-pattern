<?php


$router->get('/', function () {
    return view('welcome');
});

$router->resource('topics', 'TopicController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
