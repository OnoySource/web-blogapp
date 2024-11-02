<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = storage_path('app/articles.json');
        $json = file_get_contents($path);
        $articles = json_decode($json, true);

        foreach($articles as $article){
            Article::updateOrCreate([
               "title" => $article['title'], 
               "slug" => $article['slug'], 
               "content" => $article['content'], 
               "image" => $article['image'],
            ]);
        }
    }
}
