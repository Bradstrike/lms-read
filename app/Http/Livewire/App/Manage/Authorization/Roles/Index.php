<?php

namespace App\Http\Livewire\App\Manage\Authorization\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $name;
    public $search;

    public $selectedPermissions = [];
  
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.app.manage.authorization.roles.index', [
            'roles' => Role::where('name', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->get(),
            'permissions' => Permission::all()
        ]);
    }

    public function submit()
    {
        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->selectedPermissions);   

        $this->selectedPermissions = [];
        $this->name = "";
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
    }

    public function test($id, $perm)
    {
        $role = Role::find($id);

        if($role->hasPermissionTo($perm)) {
            $role->revokePermissionTo($perm);
        }else {
            $role->givePermissionTo($perm);
        }
    }
}
