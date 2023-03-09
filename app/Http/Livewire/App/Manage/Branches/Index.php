<?php

namespace App\Http\Livewire\App\Manage\Branches;

use Livewire\Component;

use App\Models\Branch;
use App\Models\CreditCard;
use App\Models\User;

class Index extends Component
{
    public $search;
  
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.app.manage.branches.index', [
            'branches' => Branch::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
