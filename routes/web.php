<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Todolists routes
Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/', [TodoListController::class, 'store'])->name('store');
Route::delete('/{todoList:id}', [TodoListController::class, 'destroy'])->name('destroy');
Route::post('/todolists/{todolist}/update-priority', [TodoListController::class, 'updatePriority'])->name('updatePriority');


// priority routes

Route::post('/todolists/{todolist}/priority', [PriorityController::class, 'updatePriority'])->name('updatePriority');



// lables routes

Route::get('/labels', [LabelController::class, 'index'])->name('indexLables');
Route::get('/labels/create', [LabelController::class, 'create'])->name('createLables');
Route::post('/labels', [LabelController::class, 'store'])->name('storeLables');






