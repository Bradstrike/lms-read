<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;

class Contact extends Component
{

    public $ticket;
    public $ticket_messages;
    public string $title = '';
    public $content = '';
    public $showTicket;
    public $user;
    public $ticketmessages;
    public $answer;
    public $user_id;

    public function render()
    {
        return view('livewire.app.contact');
    }


    public function mount()
    {
        $this->tickets = Ticket::all();
        $this->user = User::all();
    }

    public function store()
    {
        $ticket = Ticket::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'state' => 'open',
            'content' => $this->content,
        ]);

        TicketMessage::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->user()->id,
            'content' => $this->content,
        ]);

        session()->flash('content', 'Mesajınız başarıyla gönderildi.');


        if (auth()->user()->hasRole('superadmin')) {
            TicketMessage::create([
                'ticket_id' => $ticket->id,
                'user_id' => auth()->user()->id,
                'content' => $this->answer,
            ]);
        }

    }

    public function answer($id)
    {
        $this->showTicket = Ticket::find($id);
        $this->ticketmessages = TicketMessage::where('ticket_id', $id)->get();
    }

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('app.contact');
    }
    

    



    

}
