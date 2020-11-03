<?php

namespace App\Http\Livewire;
use App\Models\Comment;
use Livewire\Component;

class CommentsForm extends Component
{
    public $name;
    public $comment;
    public $book;

    public function save()
    {
        $data=[
            'name' => $this->name,
            'comment' => $this->comment,
            'status' => 2,
            'book_id' => $this->book->id,
        ];

        Comment::create($data);
        $this->cleanVars();
    }

    public function cleanVars()
    {
        $this->name = null;
        $this->comment = null;
    }

    public function render()
    {
        return view('livewire.comments-form');
    }
}
