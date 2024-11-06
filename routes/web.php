<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get("/",[HomeController::class,"index"]);
//Route::get("/articles",[HomeController::class,"articles"]);
Route::get("/dash",[HomeController::class,"dashboard"]);
Route::get("/post",[PostController::class,"index"]);

Route::get("/article/{slug}",[HomeController::class,"showBySlug"])->name("article.articles");