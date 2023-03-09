<?php

namespace App\Http\Livewire\App\Pricing;

use Livewire\Component;
use App\Models\Payment;

class Orders extends Component
{
    public $payments;

    public function mount()
    {
        $this->payments = auth()->user()->payments;
    }

    public function render()
    {
        return view('livewire.app.pricing.orders');
    }
}
