<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController; // always add to the route of your controllers

use App\Http\Controllers\ProjectTasksController;

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

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/', [ProjectsController::class, 'index']);

/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE   /projects/1 (destroy)
*/

Route::resource('projects', ProjectsController::class);

Route::post('/projects/{project}/tasks', [ProjectTasksController::class, 'store']);

Route::patch('/tasks/{task}', [ProjectTasksController::class, 'update']);

// Route::get('/projects', [ProjectsController::class, 'index']);

// Route::get('/projects/create', [ProjectsController::class, 'create']);

// Route::get('/projects/{project}', [ProjectsController::class, 'show']);

// Route::post('/projects', [ProjectsController::class, 'store']);

// Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit']);

// Route::patch('/projects/{project}', [ProjectsController::class, 'update']);

// Route::delete('/projects/{project}', [ProjectsController::class, 'destroy']);