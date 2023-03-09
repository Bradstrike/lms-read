<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use App\Models\User;

class Rightbar extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.app.manage.users.rightbar');
    }
}
