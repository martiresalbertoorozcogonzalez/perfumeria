<?php


// App\User::create([
//     'name' => 'Carlos',
//     'email' => 'carlos@gmail.com',
//     'password' => bcrypt('123456'),
// ]);


//--------------Rutas de inicio de pagina-----------------//
Route::get('/', 'InicioController@inicio')->name('inicio');


//-----------Ruta para el buscador de productos-----------//
Route::get('/search', 'InicioController@search');


//--------------Controlador perfumes mujer----------------//
Route::get('perfumemujer', 'PerfumeMujerController@index')->name('perfumemujer');


//--------------Controlador perfumes hombre---------------//
Route::get('perfumehombre', 'PerfumeHombreController@index')->name('perfumehombre');


//---------------------Controlador Acercade ---------------//
Route::get('acercade', 'AcercadeController@index')->name('acercade');


//---------------------Controlador Contacto ---------------//
Route::get('contacto', 'ContactoController@index')->name('contacto');

Route::post('contact', 'ContactoController@message')->name('contact');



// -----------------Rutas Admin ------------------------- //
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('perfume', 'PerfumeriaController');

Route::resource('mensajes', 'MensajesController');

Route::resource('acerca', 'AcercaController');
