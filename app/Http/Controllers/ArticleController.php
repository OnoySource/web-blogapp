<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        //$articles = Article::all();
        //return view("index",compact("articles"));
        return view("index");
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
        $article->increment("views");
        $articles = Article::paginate(3);
        return view('article.articles', compact("article","articles"));
    }
}
