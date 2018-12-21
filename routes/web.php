<?php

// lets bind something into the service container
// use bind for multiple instance or singleton for a single global instance
// app()->bind('example', function () {
// app()->singleton('App\Example', function () {
//     dd('called agian');
//     return new \App\Example;
// });
app()->singleton('App\Services\Twitter', function () {
    return new App\Services\Twitter('secretKey');
});

Route::get('/', function () {
    // dd(app('App\Example'));

    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/project/{project}/tasks', 'ProjectTasksController@store');
