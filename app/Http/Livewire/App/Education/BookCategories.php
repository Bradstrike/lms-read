<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Book as BookModel;
use App\Models\BookCategory;

class BookCategories extends Component
{
    public function render()
    {
        return view('livewire.app.education.book-categories');
    }

    public function getBookByCategory()
    {
        $this->category = BookCategory::all();
        $this->categories = $this->category->toArray();
        return $this->categories;
        return view('livewire.app.education.book', ['categories' => $this->categories]);
        
    }
}
