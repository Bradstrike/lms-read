<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use App\Models\User;

class Activity extends Component
{
	public User $user;
	public $activities;

	public function mount($id)
	{
		$this->user = User::find($id);
		$this->activities = \Spatie\Activitylog\Models\Activity::orderBy('id', 'desc')->whereCauserId($id)->get();
	}

	public function render()
	{
		return view('livewire.app.manage.users.activity');
	}
}
