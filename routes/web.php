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
/*
    1- GET /projects            (index) -> all
    2- GET /projects/create     (create)
    3- GET /projects/1          (show) -> existing project
    4- POST /projects           (store)
    5- GET /projects/1/edit     (edit)
    6- PATCH /projects/1        (update)
    7- Delete /projects/1       (destroy)

    Route::get('/projects', 'ProjectsController@index')->name('projects.index');
    Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
    Route::get('/projects/{project}', 'ProjectsController@show')->name('show');
    Route::post('/projects', 'ProjectsController@store');
    Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
    Route::patch('/projects/{project}', 'ProjectsController@update')->name('update');
    Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('delete');
*/

Auth::routes();

Route::view('/', 'welcome');

Route::resource('projects', 'ProjectController');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');



