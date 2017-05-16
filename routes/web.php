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

Route::get('/tasks', function () {
	
	$tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('tasks'));
});

Route::get('/form', 'TaskController@getinfos');

Route::post('/form', 'TaskController@postinfos');