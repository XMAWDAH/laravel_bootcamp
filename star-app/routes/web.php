<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [TaskController::class, 'index']);

Route::get('/tasks/done', [TaskController::class, 'done']);

Route::get('/tasks/onprogress', [TaskController::class, 'onprogress']);

Route::get('/tasks/todo', [TaskController::class, 'todo']);


Route::get('/users', [UserController::class, 'ListOfUser']);

Route::get('/tasks/{id}/delete', [TaskController::class, 'delete']);

Route::get('/tasks/due', [TaskController::class, 'dueTasks']);

Route::post('/tasks/create', [TaskController::class, 'store']);
Route::get('/tasks/create', [TaskController::class, 'create']);

Route::get('/user/{id}',  [UserController::class, 'showTasks']);

Route::get('/tasks/{id}/onprogress', [TaskController::class, 'aonprogress']);
Route::get('/tasks/{id}/done', [TaskController::class, 'adone']);


