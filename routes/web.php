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


route::get('/', 'PagesController@home');
route::get('/about', 'PagesController@about');


route::get('/siswa', 'SiswaController@index');

//students
// route::get('/students', 'StudentsController@index');
// route::get('/students/create', 'StudentsController@create');
// route::get('/students/{student}', 'StudentsController@show');
// route::post('/students', 'StudentsController@store');
// route::delete('/students/{student}', 'StudentsController@destroy');
// route::get('/students/{student}/edit', 'StudentsController@edit');
// route::patch('/students/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');
