<?php

namespace App\Http\Livewire\App\Manage\Authorization\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $name = "";
    public $names = [];
    public $search;
  
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.app.manage.authorization.permissions.index', [
            'permissions' => Permission::where('name', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required'
        ]);

        if(strpos($this->name, ',') !== false) {
            $this->names = explode(',', $this->name);
        }else {
            $this->names[] = trim($this->name);
        }

        foreach ($this->names as $item) {
            Permission::create(['name' => trim($item)]);
        }
    }
}
