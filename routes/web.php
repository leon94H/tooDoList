<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelController;
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

Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/', [TodoListController::class, 'store'])->name('store');
Route::delete('/{todoList:id}', [TodoListController::class, 'destroy'])->name('destroy');


// lables route

Route::get('/labels', [LabelController::class, 'index'])->name('indexLables');
Route::get('/labels/create', [LabelController::class, 'create'])->name('createLables');
Route::post('/labels', [LabelController::class, 'store'])->name('storeLables');

