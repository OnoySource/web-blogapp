<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Visitor;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(8);
        
        $currentTime = Carbon::now("Asia/Jakarta");
        $timeOfDay = $currentTime->format('H'); // Mendapatkan jam sekarang dalam format 24 jam

        if ($timeOfDay >= 18 || $timeOfDay < 6) {
            // Jam 18:00-05:59 (Malam dan Dini Hari)
            if ($timeOfDay < 6) {
                $greeting = 'Dini hari';
            } else {
                $greeting = 'Malam ini';
            }
        } elseif ($timeOfDay >= 12 && $timeOfDay < 18) {
            $greeting = 'Sore ini';
        } else {
            $greeting = 'Pagi ini';
        }


        return view("index",compact("articles","greeting","currentTime"));
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
        $articles = Article::paginate(3);
        return view('article.articles', compact("article","articles"));
    }

    public function dashboard(Request $request){
        
        $data = 
        [
            "title" => "Dashboard",
        ];
        return view("src/auth/dashboard",$data);
    }

}
