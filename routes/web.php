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

Route::get('/task', function () {

    $data = App\Task::all();

    return view('task')->with('tasks',$data); //when open the  task view, should show the existing tasks.
});

Route::post('saveTask','TaskController@store');


Route::get('/markascompleted/{id}','TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@deleteTask');

Route::get('/updatetask/{id}','TaskController@updateTaskView');


