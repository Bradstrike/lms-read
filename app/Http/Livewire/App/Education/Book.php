<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Book as BookModel;
use App\Models\BookCategory;

class Book extends Component
{
    public $books;
    public $title;
    public $description;
    public $image;
    public $selectedCategory = 0;
    public $categories;
    

    public function mount() {
        
        $this->books = BookModel::where(function($query) {
            if($this->selectedCategory != 0) {
                $query->where('book_category_id', $this->selectedCategory);
            }
        })->get();
        $this->book = $this->books->toArray();
        $this->categories = BookCategory::all();
    
    }

    public function updatedSelectedCategory()
    {
        $this->books = BookModel::where(function($query) {
            if($this->selectedCategory != 0) {
                $query->where('book_category_id', $this->selectedCategory);
            }
        })->get();
    }
    
    public function render()
    {
        return view('livewire.app.education.book');
    }

    public function getBook($id)
    {
        $book = Book::find($id);
        return $book;
    }

    // public function getBookByCategory()
    // {
    //     $this->category = BookCategory::all();
    //     $this->categories = $this->category->toArray();
    //     return $this->categories;
    //     return view('livewire.app.education.book', ['categories' => $this->categories]);
        
    // }

}
