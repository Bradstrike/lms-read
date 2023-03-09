<?php

namespace App\Http\Livewire\App\Manage\Orders;

use Livewire\Component;
use App\Models\Payment;
use App\Models\User;

class Index extends Component
{
    public $payments;

    public function mount()
    {
        $this->payments = Payment::all();
    }

    public function render()
    {
        return view('livewire.app.manage.orders.index');
    }

    public function changeState($id, $state)
    {
        $payment = Payment::findOrFail($id);

        $payment->update(['state' => $state]);

        if ($state == "Ödendi") {
            if ($payment->causer_type == "user") {
                $user = User::findOrFail($payment->causer);
                $user->lessons()->attach($payment->lesson_id);
            }
        }else {
            if ($payment->causer_type == "user") {

                $user = User::findOrFail($payment->causer);
                $user->lessons()->detach($payment->lesson_id);
            }
        }

        $this->mount();
    }
}
