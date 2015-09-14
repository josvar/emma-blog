<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/backend/pokemon/create', function () {
    return view('backend.pokemon.create');
});

Route::get('/backend/pokemon/edit', function () {
    return view('backend.pokemon.edit');
});

Route::resource('/backend/tipo', 'TipoController');
