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

/*
    GET /projects (index)
    GET /projects/create (create)       // create a project
    GET /projects/1 (show)              // show me a project
    POST /projects (store)              // create a project
    GET /projects/1/edit (edit)         // edit a project
    PATCH /projects/1 (update)          // update a project         PUT/PATCH very similar but lets skick with PATCH
    DELETE /projects/1 (destroy)        // delete a project
*/

Route::resource('projects', 'ProjectsController'); // will auto generate the routes as below
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
