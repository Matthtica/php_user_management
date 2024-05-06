<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Route::resource('/posts', PostController::class);
Route::resource('/posts', PostController::class)->only(['index', 'show']);
Route::resource('/posts', PostController::class)->only(['create', 'store'])->middleware('auth');
Route::resource('/posts', PostController::class)->only(['edit', 'update', 'destroy'])->middleware(['auth', 'can:edit,post']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

