<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditForm extends Component
{
    public function mount($book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.edit-form',[
            'book' => $this->book,
        ]);
    }
}
