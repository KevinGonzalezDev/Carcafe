<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\AdminController@index')->name('raiz');
Route::get('locale/{lang}', 'App\Http\Controllers\LocalizationController@index');
Route::get('/welcome', 'App\Http\Controllers\AdminController@welcome')->name('welcome');
Route::get('/about', 'App\Http\Controllers\AdminController@about')->name('about');
Route::get('/we', 'App\Http\Controllers\AdminController@we')->name('we');
Route::get('/ourTeam', 'App\Http\Controllers\AdminController@ourTeam')->name('ourTeam');
