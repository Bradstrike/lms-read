<?php

namespace App\Http\Livewire\App\Manage\Branches;

use Livewire\Component;
use App\Models\Branch;

class Show extends Component
{
    public $branch;
 
    public function mount($id)
    {
        $this->branch = Branch::find($id);
    }

    public function render()
    {
        return view('livewire.app.manage.branches.show');
    }
}
