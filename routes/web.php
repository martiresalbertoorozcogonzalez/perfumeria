<?php

//--------------Rutas de inicio de pagina-----------------//

Route::get('/', 'InicioController@inicio')->name('inicio');


//--------------Controlador perfumes mujer----------------//

ROute::get('perfumemujer', 'PerfumeMujerController@index')->name('perfumemujer');

// -----------------Rutas Admin ------------------------- //

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('perfume', 'PerfumeriaController');
