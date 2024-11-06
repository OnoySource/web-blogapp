<?php

namespace App\Livewire;
use App\Http\livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

use Livewire\WithFileUploads; // Import trait untuk file upload
use Illuminate\Support\Facades\Storage;

class Post extends Component
{
    use WithFileUploads;

    public $title,$slug,$content,$image_path;
    public $articles;
    
    protected $rules = [
        'title' => 'string|max:30',
        'slug' => 'string|min:5|max:30',
        'content' => 'string|min:|10|max:500',
        'image_path' => 'required|image|max:1024'
    ];

    public function store()
    {

        $path = $this->image_path->store('images', 'public');

        \App\Models\Article::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image_path' => $path
        ]);
        
        // Reset field 'name' setelah simpan data
        $this->reset(['title','slug','content','image_path']);

        // Perbarui daftar artikel
        $this->articles = \App\Models\Article::all();

        // Tampilkan pesan sukses
        session()->flash('message', 'Post created successfully!');
    }

        

    public function mount()
    {
        $this->articles = \App\Models\Article::all();
       // $this->render();
    }

    public function render()
    {
        return view('livewire.post');
    }

}
