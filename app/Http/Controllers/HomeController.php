<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = 
        [
            "title" => "MindCode",
        ];
        return view("index",$data);
    }

    public function articles(){
        $data = 
        [
            "title" => "Article",
        ];
        return view("articles",$data);
    }
    public function dashboard(){
        $data = 
        [
            "title" => "Dashboard",
        ];
        return view("src/auth/dashboard",$data);
    }

}
