<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', [BlogController::class, 'home']);
Route::get('/about', [BlogController::class, 'about']);

/*
|--------------------------------------------------------------------------
| CREATE
|--------------------------------------------------------------------------
*/
Route::get('/post/create', [BlogController::class, 'create']);
Route::post('/post', [BlogController::class, 'store'])->name('post.store');

/*
|--------------------------------------------------------------------------
| READ
|--------------------------------------------------------------------------
*/
Route::get('/menu', [BlogController::class, 'menu']);
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');

/*
|--------------------------------------------------------------------------
| UPDATE
|--------------------------------------------------------------------------
*/
Route::get('/post/{id}/edit', [BlogController::class, 'edit']);
Route::put('/post/{id}', [BlogController::class, 'update']);

/*
|--------------------------------------------------------------------------
| DELETE (FITUR BARU, AMAN)
|--------------------------------------------------------------------------
*/
Route::delete('/post/{id}', [BlogController::class, 'destroy'])
    ->name('post.destroy');
