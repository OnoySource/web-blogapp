<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;

class Post extends Component
{
    use WithFileUploads;

    public $title, $slug, $content, $image_path;
    public $articles;

    // Validasi data
    protected $rules = [
        'title' => 'required|string|max:50',  // Tambahkan 'required' untuk title
        'slug' => 'required|string|min:5|max:50',  // Tambahkan 'required' untuk slug
        'content' => 'required|string|min:10',  // Perbaiki aturan content
        'image_path' => 'required|image|max:1024',  // Validasi file image
    ];

    // Pesan validasi kustom
    protected $messages = [
        'title.required' => 'Judul tidak boleh kosong.',
        'slug.required' => 'Slug tidak boleh kosong.',
        'slug.min' => 'Slug harus memiliki minimal 5 karakter.',
        'content.required' => 'Konten tidak boleh kosong.',
        'content.min' => 'Konten harus memiliki minimal 10 karakter.',
        'image_path.required' => 'Gambar tidak boleh kosong.',
        'image_path.image' => 'File yang diunggah harus berupa gambar.',
        'image_path.max' => 'Ukuran gambar maksimal 1 MB.',
    ];

    // Method untuk menyimpan data artikel
    public function store()
    {
        // Validasi data sebelum disimpan
        $this->validate();

        // Simpan gambar ke storage dan ambil path-nya
        $path = $this->image_path->store('images', 'public');

        // Simpan artikel ke database
        Article::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image_path' => $path,
        ]);

        // Reset form setelah data disimpan
        $this->reset(['title', 'slug', 'content', 'image_path']);

        // Update daftar artikel
        $this->articles = Article::all();

        // Tampilkan pesan sukses
        session()->flash('message', 'Postingan berhasil dibuat!');
    }

    // Method untuk inisialisasi data artikel
    public function mount()
    {
        $this->articles = Article::all();
    }

    // Method untuk render tampilan Livewire
    public function render()
    {
        return view('livewire.post');
    }
}
