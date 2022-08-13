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

Route::get('/', 'HomeController@index');
Route::post('/card/add', 'CardController@add')->name('cardTitle');
Route::get('/card/detail', 'CardController@detail');

Route::post('/task/add', 'TaskController@add')->name('taskTitle');
Route::get('/task/detail/{slug}', 'TaskController@detail')->name('taskDetail');
