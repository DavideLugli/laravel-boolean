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

// home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/privacy', 'HomeController@index')->name('home.privacy');
Route::get('/domande-frequenti', 'HomeController@index')->name('home.faq');

// studenti
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/show/{id}', 'StudentController@show')->name('students.show');
