<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Hola/{nombre}', function ($nombre) {
    return 'Hola '.$nombre;
});
Route::get('/home',function(){
    return view('index');
})->name('home');
