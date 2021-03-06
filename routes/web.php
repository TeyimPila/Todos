<?php

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

//Route::resources([
//    'todos' => 'TodosController'
//]);

Route::get('/', 'TodosController@home')->name('todos.home');
Route::get('/todos', 'TodosController@index')->name('todos.index');
Route::post('/todos', 'TodosController@store')->name('todos.store');
Route::get('/todos/create', 'TodosController@create')->name('todos.create');
Route::get('/todos/{id}', 'TodosController@show')->name('todos.show');
Route::get('/todos/{id}/edit', 'TodosController@edit')->name('todos.edit');
Route::PUT('/todos/{id}', 'TodosController@update')->name('todos.update');
Route::delete('/todos/{id}', 'TodosController@destroy')->name('todos.destroy');