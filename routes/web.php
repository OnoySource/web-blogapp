<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


Route::get("/",[HomeController::class,"index"]);
//Route::get("/articles",[HomeController::class,"articles"]);
Route::get("/dash",[AdminController::class,"dashboard"]);
Route::get("/post",[PostController::class,"index"]);

Route::get("/article/{slug}",[ArticleController::class,"showBySlug"])->name("article.articles");
