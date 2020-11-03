<?php

namespace App\Http\Livewire;
use App\Models\Comment;
use Livewire\Component;

class CommentStatus extends Component
{
    public $comments;

    public function render()
    {
        $this->comments = Comment::all();
        return view('livewire.comment-status',['comments'=>$this->comments]);
    }

    public function delete($id)
    {
        Comment::whereId($id)->first()->delete();
        $this->comments = Comment::all();
    }

    public function approve($id)
    {
        $comment = Comment::whereId($id)->first();
        $comment->status = 1;
        $comment->save();
        $this->comments = Comment::all();
//        $comments = Comment::all();
//        return view('livewire.comment-status',['comments'=>$comments]);
    }
}
