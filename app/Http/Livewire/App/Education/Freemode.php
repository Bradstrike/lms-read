<?php

namespace App\Http\Livewire\App\Education;

use App\Models\Exercise;
use App\Models\Lesson;
use Livewire\Component;

class Freemode extends Component
{
    public function render()
    {
        return view('livewire.app.education.freemode');
    }

    public function mount()
    {
        $this->lesson = Lesson ::where('id', 1) -> first();
        $this->exercises = Exercise::where('id', '!=', $this->id)->get();  
    }
}