<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Lecture as LectureModel;

class Lecture extends Component
{
    public $Lectures;

    public $name;
    public $description;
    public $icon;

    public function mount()
    {
        $this->Lectures = LectureModel::all();
        $this->lecture = $this->Lectures->toArray();
    }

    public function render()
    {
        return view('livewire.app.education.lecture');
    }


    public function lectures()
    {
        
        $this->Lectures = LectureModel::all();
        $this->lecture = $this->Lectures->toArray();

    }

}

    
    


    




