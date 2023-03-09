<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Lecture;
use App\Models\Exercise;

class Startedu extends Component
{



    public function render()
    {
        return view('livewire.app.education.startedu');
    }
    
    public function mount($id, $exercise_id) 
    {
        $this->lecture = $this->getLecture($id, $exercise_id);
    }

    
}

