<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\TaskController;
use App\Models\Article;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/tasks', TaskController::class);