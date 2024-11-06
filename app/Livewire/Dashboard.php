<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public $articles;
    public function mount()
    {
        $this->articles = \App\Models\Article::all();
       // $this->render();
    }

    public function render()
    {
        $this->articles = \App\Models\Article::all();
        
        return view('livewire.dashboard');
    }
}