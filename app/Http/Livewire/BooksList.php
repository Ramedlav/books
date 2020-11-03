<?php

namespace App\Http\Livewire;
use App\Models\Book;
use Livewire\Component;
use Livewire\withPagination;
class BooksList extends Component
{
    use withPagination;
    public function render()
    {
        return view('livewire.books-list',[
            'books' => Book::paginate(10)
        ]);
    }
}
