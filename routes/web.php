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

Route::get('/', function () {
    return view('holamundo');
});

Route::get('/welcome', 'App\Http\Controllers\WelcomeController@welcome');

Route::get('/contacto', 'App\Http\Controllers\WelcomeController@getContacto');
