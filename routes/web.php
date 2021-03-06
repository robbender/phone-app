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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/search', 'UsersController@search');

Route::post('/users/search', 'UsersController@search');


// Route::get('/users/index', function () {
//     return view('/index');
// });

Route::resource('users', 'UsersController');

Route::patch('/tasks/{task}', 'UserTasksController@update');

