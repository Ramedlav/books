<?php

namespace App\Http\Livewire;
use App\Models\Comment;
use Livewire\Component;

class CommentsView extends Component
{
    public $book;

    public function render()
    {
        return view('livewire.comments-view',[
            'comments'=>Comment::where('book_id','=', $this->book->id)->get()
        ]);
    }
}
