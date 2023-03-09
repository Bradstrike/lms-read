<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Book;

class Readpage extends Component
{
    public function render()
    {
        return view('livewire.app.education.readpage');
    }

    public function mount($id) {
        $this->book = Book::findOrFail($id);
    }

    public function getBook($id)
    {
        $book = Book::find($id);
        return $book;
    }


     public function readBook($id)
     {
         $book = \App\Models\Book::find($id);
         return view('livewire.app.education.readpage', compact('book'));
        
     }

    public function getBookData($id)
    {
        $this->books = Book::all();
        $this->book = $this->books->toArray();
        return $this->book;
        return view('livewire.app.education.readpage', ['books' => $this->book]);
    }
}
