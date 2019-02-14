<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
});


Route::get('logout', function () {
    return view('logout');
});


Route::get('productos', function () {
    return view('productos.productos');
});


Route::get('showproducto/{id}', function () {
    return view('productos.showproducto');
});


Route::get('createproducto', function () {
    return view('productos.createproducto');
});


Route::get('editproducto/{id}', function () {
    return view('productos.editproducto');
});



























/*

Route::get('/', 'welcome');

Route::get('login', 'login');

Route::get('logout', 'logout');

Route::get('productos', 'productos');

Route::get('productos/show/{id}', 'producto{id}');

Route::get('productos/create', 'addproducto');

Route::get('productos/edit/{id}', 'editproducto');

*/ 


