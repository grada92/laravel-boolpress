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
    return view('admin.home');
})->name('index');

Auth::routes();

Route::middleware('auth')  //si collega alla cartella middleware
->namespace('Admin')
->name('admin.')   //cartella admin dove dentro ci sono i file
->prefix('admin')
->group(function () {
    Route::get('/' , 'HomeController@index') // rotta se utente autenticato
    ->name('index');
    Route::resource('posts' , 'PostController' );
    Route::resource('categories', 'CategoryController');
}
);

Route::get('{any?}', function() {  // per qualsiasi altra rotta mandami in guest.home
    return view("guest.home");
})->where("any", ".*");
