<?php

//--------------Rutas de inicio de pagina-----------------//

Route::get('/', 'InicioController@inicio')->name('inicio');


//--------------Controlador perfumes mujer----------------//

Route::get('perfumemujer', 'PerfumeMujerController@index')->name('perfumemujer');

//--------------Controlador perfumes hombre---------------//

Route::get('perfumehombre', 'PerfumeHombreController@index')->name('perfumehombre');


//---------------------Controlador Acercade ---------------//

Route::get('acercade', 'AcercadeController@index')->name('acercade');


//---------------------Controlador Contacto ---------------//

Route::get('contacto', 'ContactoController@index')->name('contacto');


// -----------------Rutas Admin ------------------------- //

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('perfume', 'PerfumeriaController');
