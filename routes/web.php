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
    return view('welcome');
});

Auth::routes();


/* lista route'ów na podstrony */
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/list', 'App\Http\Controllers\ListController@index')->name('list');
Route::get('/offer', 'App\Http\Controllers\OfferController@index')->name('offer');
Route::get('/statuslist', 'App\Http\Controllers\StatusListController@index')->name('statuslist');
Route::get('/archive', 'App\Http\Controllers\ArchiveController@index')->name('archive');






