<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);

Route::group([
    'middleware' => ['auth:sanctum'],
], function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::post('/post', [PostController::class, 'create']);
    Route::get('/post', [PostController::class, 'index']);
});
