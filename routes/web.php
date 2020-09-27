<?php


// App\User::create([
//     'name' => 'Beto',
//     'email' => 'beto@gmail.com',
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


//-------------------Ruta descubre mas perfumes ----------//
Route::get('descubreperfumes', 'DescubreController@index')->name('descubreperfumes');


// -----------------Rutas Admin ------------------------- //
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('perfume', 'PerfumeriaController');

Route::resource('mensajes', 'MensajesController');

Route::resource('acerca', 'AcercaController');





// App\Category::create([
//     'title' => 'Cabezales',
//     'user_id' => 1,
// ]);

// App\Category::create([
//     'title' => 'Furgones',
//     'user_id' => 1,
// ]);

// App\Condicion::create([
//     'titulo' => 'Usado',
//     'user_id' => 1,
// ]);

// App\Role::create([
//     'name' => 'admin',
//     'display_name' => 'admin',
//     'description' => 'admin',
// ]);

// App\Role::create([
//     'name' => 'visitante',
//     'display_name' => 'visitante',
//     'description' => 'visitante',
// ]);


// App\User::create([
//     'name' => 'Beto',
//     'email' => 'beto@gmail.com',
//     'password' => bcrypt('123456'),
//     'role_id' => 1,
// ]);

// App\User::create([
//     'name' => 'Irene Alburez',
//     'email' => 'irene@gmail.com',
//     'password' => bcrypt('123456'),
//     'role_id' => 2,
// ]);
