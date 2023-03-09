<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Exercise as ExerciseModel;
use App\Models\Lesson as LessonModel;
use App\Models\Lecture as LectureModel;

class Exerciselist extends Component
{

    public $Exercises;
    public ExerciseModel $exercises;

    

    public $name;
    public $description;
    public $icon;
    public $lesson_id;
    
    
    public function mount()
    {
        $this->Lecture = LectureModel::all();
        $this->lecture = $this->Lecture->toArray();
        $this->Exercises = ExerciseModel::all();
    }

    public function exercises()
    {
        $this->Exercises = ExerciseModel::all();
        $this->exercises = $this->Exercises->toArray();
    }

    public function render()
    {
        return view('livewire.app.education.exerciselist');
    }

    //kullanıcının tamamlamadığı antrenmanlar blocklu olsun

    public function blockExercise () 
    {
        $this->exercises = ExerciseModel::where('id', '!=', $this->id)->get();  
    }

  


  
    
}



