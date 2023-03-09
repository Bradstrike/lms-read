<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use App\Models\User;

class Show extends Component
{
	public User $user;

	public $education;

	public function mount($id)
	{
		$this->user = User::find($id);
	}

	public function render()
	{
		return view('livewire.app.manage.users.show');
	}

	public function attachEducation()
	{
		$this->user->lessons()->attach($this->education);
		$this->mount($this->user->id);

		return redirect()->route('app.manage.users.show', $this->user->id);
	}

	public function deleteUserLesson($id)
	{
		$this->user->lessons()->detach($id);
		$this->mount($this->user->id);

		return redirect()->route('app.manage.users.show/{$id}
		', $this->user->id);
	}
}
