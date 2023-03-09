<?php

namespace App\Http\Livewire\App\Pricing;

use Livewire\Component;
use App\Models\Lesson;

class Result extends Component
{
    public $lesson;

    public function mount()
    {
        if(request('lesson') && request('lesson') != 0) {
            $this->lesson = Lesson::findOrFail(request('lesson'));
        }
    }

    public function render()
    {
        return view('livewire.app.pricing.result');
    }
}
