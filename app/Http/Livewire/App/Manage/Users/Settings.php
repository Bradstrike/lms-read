<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

use App\Models\User;

class Settings extends Component
{
    public User $user;

    public $assignedRole = "0";

    public $roles;

    protected $rules = [
        'user.firstname'         => 'required',
        'user.lastname'          => 'required',
        'user.branch_id'         => 'required',
        'user.phone'             => 'required',
        'user.email'             => 'required',
        'user.birthday'          => 'nullable',
        'user.address'           => 'nullable',
        'roles'                  => 'required',
    ];

    public function mount($id)
    {
        $this->user = User::find($id);
        $this->roles = $this->user->roles()->pluck('name');
    }

    public function render()
    {
        return view('livewire.app.manage.users.settings');
    }

    public function store()
    {
        $this->validate();

        $this->user->save();
        $this->user->syncRoles([$this->roles]);

        return redirect()->route('app.manage.users.settings', $this->user->id); 
    }



    
    //Kullanıcı aktifleştirme ve pasifleştirme işlemleri settings.blade.php içerisindeki butonlarla yapılıyor.
    public function statusChange()
    {
        $this->user->status = $this->user->status == 1 ? 0 : 1;
        $this->user->save();

        return redirect()->route('app.manage.users.settings', $this->user->id);
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


}
