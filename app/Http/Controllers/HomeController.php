<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::latest()->get();
        
        return view("index",compact("articles"));
    }

    public function articles(){
        $data = 
        [
            "title" => "Article",
        ];
        return view("article.articles",$data);
    }

    public function showBySlug($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.articles', compact('article'));
    }

    public function dashboard(){
        $data = 
        [
            "title" => "Dashboard",
        ];
        return view("src/auth/dashboard",$data);
    }

}
