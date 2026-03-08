<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::post('/posts', [PostController::class, 'create']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

