<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use App\Models\User;

class Sidebar extends Component
{
	public User $user;

	public function render()
	{
		return view('livewire.app.manage.users.sidebar');
	}
}
