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

Route::get('/', 'homecontroller@go')->name('go');
Route::get('/action/{id}', 'homecontroller@action');
Route::get('/cree', function () {
    return view('cree');
});

Route::get('/rejoindre', function () {
    return view('rejoindre');
});
Route::post('/go','homecontroller@go');
Route::post('/envoyer','homecontroller@envoyer');
Route::post('/cree','homecontroller@cree');
Route::post('/refuser','homecontroller@refuser');
Route::put('/update/{id}','homecontroller@update')->name('put');
