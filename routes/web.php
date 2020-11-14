<?php

use App\Http\Controllers\LinkController;
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

Route::get('/', 'App\Http\Controllers\LinkController@index')->name('index');
Route::post('/store', 'App\Http\Controllers\LinkController@store');
Route::get('/{token}', 'App\Http\Controllers\LinkController@redirect');
