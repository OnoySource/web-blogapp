<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

Route::get("/",[HomeController::class,"index"]);
Route::get("/articles",[HomeController::class,"articles"]);

