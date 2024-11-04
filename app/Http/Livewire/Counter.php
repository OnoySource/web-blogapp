<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0; // Variabel untuk menyimpan nilai counter

    public function increment()
    {
        $this->count++; // Menambahkan 1 ke counter
    }

    public function decrement()
    {
        $this->count--; // Mengurangi 1 dari counter
    }

    public function render()
    {
        return view('livewire.counter'); // Mengembalikan view komponen
    }
}
