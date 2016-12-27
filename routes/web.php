<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('starter');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



// rutas para nueva asesoria
Route::get('form_nueva_asesoria', 'AsesoriasController@getNuevaAsesoria');
Route::post('nueva_asesoria', 'AsesoriasController@nueva_asesoria');


//rutas para opciones de asesoria. Sidebar->Mis asesorias
Route::get('asesorias/solicitadas/{page?}', 'AsesoriasController@getSolicitadas');
Route::get('asesorias/por_pagar/{page?}', 'AsesoriasController@getPorPagar');
Route::get('asesorias/concretadas/{page?}','AsesoriasController@getConcretadas');
Route::get('asesorias/concluidas/{page?}', 'AsesoriasController@getConcluidas');

Route::post('asesorias/confirmar','AsesoriasController@postConfirmarAsesoria');

//Rutas para usuario
Route::get('form_editar_usuario/{id}','UsuariosController@form_editar_usuario');
Route::post('editar_usuario','UsuariosController@editar_usuario');

Route::get('form_foto_perfil','UsuariosController@form_foto_perfil');
Route::post('subir_foto_perfil','UsuariosController@subirImagen');
