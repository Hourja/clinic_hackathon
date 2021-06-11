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

Route::get('/api', 'clinicAPI@index');

Route::get('/', 'clientController@index');

Route::get('/client/{id}', 'clientController@show');
Route::get('/client/{id}/{pet_id}', 'clientController@pet');


Route::get('/results', 'clientController@search')->name('search');

Route::get('/clients/create', 'AdminController@create');
Route::post('/clients', 'AdminController@store');
Route::get('/clients/{id}/edit', 'AdminController@edit');
Route::put('/clients/{id}', 'AdminController@update');

// Route::get('/client/{id}/pet/create', 'PetController@createPet');
Route::post('/pet/', 'PetController@storePet');
Route::get('/pet/{id}/edit', 'PetController@editPet');
Route::put('/pet/{id}', 'PetController@updatePet');
Route::put('/pet/delete/{id}', 'PetController@deletePet');
