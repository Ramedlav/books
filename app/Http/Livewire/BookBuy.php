<?php

namespace App\Http\Livewire;
use Livewire\Component;

class BookBuy extends Component
{
    public $book;

//    public function mount($book)
//    {
//        $this->book = $book;
//    }
    public function render()
    {
        return view('livewire.book-buy');
    }
}
