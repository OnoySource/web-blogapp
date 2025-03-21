<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class Dashboard extends Component
{
    public $articles;

    public function mount()
    {
        $this->articles = Article::latest()->get(); // Ambil artikel terbaru
    }

    public function render()
    {
        $articles = Article::latest()->get();

        return view('livewire.dashboard', [
            'articles' => $this->articles
        ]);
    }
}
