<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;


class Showticket extends Component
{
    public $ticket;

    public function render()
    {
        return view('livewire.app.showticket');
    }

    public function mount()
    {
        $this->tickets = Ticket::all();
        $this->user = User::all();
    }

    public function getMessage($id)
    {
        $ticket = Ticket::find($id);
    }
}
