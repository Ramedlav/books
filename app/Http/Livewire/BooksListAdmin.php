<?php

namespace App\Http\Livewire;
use App\Models\Book;
use http\Env\Request;
use Livewire\Component;
use Livewire\withPagination;
class BooksListAdmin extends Component
{
    private $books;

    use withPagination;

    public function mount()
    {
        $this->books = Book::paginate(10);
    }

    public function render()
    {
        return view('livewire.books-list-admin',[
            'books' => Book::paginate(10),
        ]);
    }

    public function remove($id)
    {
        Book::whereId($id)->first()->delete();
        $this->books = Book::paginate(10);
    }
}
