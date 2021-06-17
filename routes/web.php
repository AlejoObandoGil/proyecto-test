<?php

use App\Models\Son;
use App\Models\People;

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

// GET, POSt PUT DLETE, ANY

// Route::get('/hola', function(){
// 	return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::post('People/store', 'PeopleController@store')->name('people.store');
Route::get('/People/Edit/{id}', 'PeopleController@edit')->name('people.edit');
Route::post('/People/update/{id}', 'PeopleController@update')->name('people.update');
Route::get('/People/delete/{id}', 'PeopleController@delete')->name('people.delete');

// Route::view('/', 'home');

Route::get('hola/{name?}', 'HomeController@hola')->name('hola');




