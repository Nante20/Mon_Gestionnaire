<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskSecController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('index');
Route::resource('/task', TaskSecController::class);
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login.index');
Route::post('/login/post',[App\Http\Controllers\AuthController::class, 'login'])->name('login');

//Route::get('/tache/creer', [App\Http\Controllers\TaskController::class, 'create'])->name('create');
//Route::post('/tache/creer-post', [App\Http\Controllers\TaskController::class, 'store'])->name('store');
//Route::get('/tache/modifier/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('edit');
//Route::put('/tache/update/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('update');
//Route::delete('/tache/supprimer/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('destroy');
