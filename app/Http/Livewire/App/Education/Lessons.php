<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class Lessons extends Component
{
    public function render()
    {
        return view('livewire.app.education.lessons');
    }

 
    public Lessons $lessons;


   public function AllLessons()
   {
       $lessons = Lesson::all();
       return view('livewire.app.education.lessons', compact('lessons'));
   }
 
   //belongstoMany
    public function buyLesson($id)
    {
         $lesson = Lesson::find($id);
         $user = Auth::user();
         $user->lessons()->attach($lesson);
    }


    




}
