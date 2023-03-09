<?php

namespace App\Http\Livewire\App\Pricing;

use Livewire\Component;
use App\Models\Lesson;

class PaymentMethods extends Component
{
    public $lesson;

    public function mount()
    {
        $this->lesson = Lesson::findOrFail(request('egitim'));
    }

    public function render()
    {
        return view('livewire.app.pricing.payment-methods');
    }
}
