<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Lecture;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Livewire\App\Education\Lecture as LectureController;
use App\Models\JsonDefinition;
use App\Models\Lesson;
use SebastianBergmann\Timer\Duration;
use Symfony\Component\HttpFoundation\Request;

class Exercises extends Component
{
    public Lecture $lecture;
    public Exercise $exercise;

    public $testVariable = "Gelmedi.";
    public $lastWord = "bos";
    public $result;
    public $hiz;

    public function render()
    {
        return view('livewire.app.education.exercises');
    }

    public function mount($id) {
        $this->lecture = Lecture::findOrFail($id);
    }

    public function buyLecture($id)
    {
        $lecture = Lecture::find($id);
        $user = Auth::user();
        //$user->lectures()->attach($lecture);
    }

    public function exerciseList($id)
    {
        $lecture = Lecture::find($id);
        $exercises = $lecture->exercises;
        return $exercises;
    }

    public function getExercise($id)
    {
        $exercise = Exercise::find($id);
        return $exercise;
    }

    public function path()
    {
        return route('livewire.app.education.exercises', $this->lecture->id);
    }

    public function incrementDuration()
    {
        $duration = auth()->user()->lectures()->where('lecture_id', $this->lecture->id)->first()->pivot->duration;
        auth()->user()->lectures()->updateExistingPivot($this->lecture->id, ['duration' => $duration + 1]);
    }

    //Önceki egzersiz bittiyse lecture_id = 1 ---> is_completed=1 olarak update edilecek.
    public function LectureComplete() 
    {
        auth()->user()->lectures()->updateExistingPivot($this->lecture->id, ['is_completed' => 1]);
        $storagedKey = 0;
        $lesson = Lesson::findOrFail($this->lecture->lesson_id);
         foreach($lesson->lectures as $key => $lec) {
            if($this->lecture->id == $lec->id) {
                $storagedKey = $lesson->lectures[$key+1]->id;
                auth()->user()->lectures()->attach($storagedKey);
                return redirect()->route("app.exercise");
            }
        }
        
    }

    
    
    public function getJsonDefinition($id)
    {
        $jsonDefinition = JsonDefinition::find($id(5));
        $jsonDefinition->definition = str_replace(" ", "&nbsp;", $jsonDefinition->definition);
        $jsonDefinition->definition = str_replace("\n", "<br>", $jsonDefinition->definition);
        

        $lastWord = explode(" ", $jsonDefinition->definition);
    }
    

    public function saveResult()
    {
        $result = json_encode($this->result);
        auth()->user()->lectures()->updateExistingPivot($this->lecture->id, ['result' => $result]);
    }


    public function nextLecture() 
     {
         $storagedKey = 0;
         foreach(auth()->user()->lectures as $key => $lec) {
             if($this->lecture->id == $lec->id) {
                 $storagedKey = auth()->user()->lectures[$key+1]->id;
             }
         }
        
         auth()->user()->lectures()->attach($storagedKey);
     }

    

     

        
       
}
