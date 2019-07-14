<?php


Route::get('/', function () {
    return view('perfumeria.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('perfumeria','PerfumeriaController');


