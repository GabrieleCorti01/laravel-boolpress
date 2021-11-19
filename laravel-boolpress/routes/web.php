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

Route::get('/', 'Guests\HomeController@index')->name('guests.home');

Route::prefix('guests')->name('guests.')->namespace('Guests')->group(function(){

    Route::resource('/post', PostController::class)->only([
        'index', 'show'
    ]);
});

Auth::routes();

Route::middleware('auth')  // devi essere autenticato
    ->namespace("Admin") // prendi i controller delle route tue figlie a partire dalla cartella Admin/
    ->prefix('admin') // inserisci come prefisso nelle URI di tutte le route figlie admin/
    ->name('admin.') // inserisci come prefisso per ogni nome di tutte le route figlie admin.
    ->group(function(){ // e raggruppale in:
        Route::get('/', 'HomeController@index')->name('home');
        
        Route::resource('/post', PostController::class)->except([
            'index', 'show' 
        ]);        
});

