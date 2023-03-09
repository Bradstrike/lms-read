<?php

namespace App\Http\Livewire\App\Pricing;

use Livewire\Component;
use App\Models\Payment;

class Show extends Component
{
    public $payment;

    public function mount()
    {
        $this->payment = Payment::findOrFail(request('siparis'));
    }

    public function render()
    {
        return view('livewire.app.pricing.show');
    }
}
