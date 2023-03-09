<?php

namespace App\Http\Livewire\App\Pricing;

use App\Http\Livewire\App\Education\Lessons;
use App\Models\Lecture;
use Livewire\Component;
use App\Models\Lesson;

class Plan extends Component
{
    public function render()
    {
        return view('livewire.app.pricing.plan');
    }

    
    public $price = 0;

    public $plans;

    public function mount()
    {
        $this->plans = $this->getPlans();
      
    }


    public function getPlans()
    {
        return Lesson::all();

    }


    public function buy() {
        $this->plan->price;
    }
    
  
  
    


    

}    