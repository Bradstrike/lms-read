<?php

namespace App\Http\Livewire\App\Manage\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class Index extends Component
{
    public $show;

    // Create Form Variables
    public $branch_id = "0";
    public $firstname = "";
    public $lastname = "";
    public $birthday = "";
    public $address = "";
    public $phone = "";
    public $email = "";
    public $avatar = "";
    public $assignedRole = "0";

    public $search = "";

    public $loggedFilter = 0;
    public $roleFilter = [];

    public $role;
    protected $queryString = ['role'];

    public function mount()
    {
        if ($this->role == "egitmenler") {
            $this->assignedRole = "Eğitmen";
        }else if (request()->segment(count(request()->segments())) == "uyeler") {
            $this->assignedRole = "Üye";
        }

        if (!auth()->user()->hasRole("Superadmin")) {
            $this->branch_id = auth()->user()->branch_id;
        }
    }

   

    public function render()
    {
        return view('livewire.app.manage.users.index', [
            'users' => User::with('roles')
            ->where(function ($query) {
                $query->where('firstname', 'LIKE', '%' . $this->search . '%')
                ->orWhere('lastname', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%');
            })
            ->whereHas("roles", function ($q) {
                if (!empty($this->role)) {
                    if ($this->role == "egitmenler") {
                        $q->where("name", "Eğitmen");
                    }else if (request()->segment(count(request()->segments())) == "uyeler") {
                        $q->where('name', 'Üye');
                    }
                }

                if (!empty($this->roleFilter)) {
                    $q->whereIn('name', $this->roleFilter);
                }
            })
            ->where(function($query) {
                /*
                *   Logged Filter 
                *   1 = Oturum açmayanlar
                *   2 = Bugün oturum açanlar
                */
                if ($this->loggedFilter == 1) {
                    $query->whereNull('logged_at');
                }else if($this->loggedFilter == 2) {
                    $query->whereNotNull('logged_at')->where('logged_at', 'LIKE', Carbon::now()->format('Y-m-d'));
                }
            })
            ->where(function($query) {
                if (!auth()->user()->hasRole("Superadmin")) {
                    $query->where('branch_id', auth()->user()->branch_id);
                }
            })
            ->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function store()
    {
        $this->assignedRole = auth()->user()->hasRole('Kurum Yöneticisi') || auth()->user()->hasRole('Superadmin') ? $this->assignedRole : "Öğrenci";

        $validatedData = $this->validate([
            'firstname'         => 'required',
            'lastname'          => 'required',
            'branch_id'         => ['required', Rule::notIn(['0', 0])],
            'phone'             => 'required',
            'email'             => 'required|email|unique:users',
            'assignedRole'      => ['required', Rule::notIn(['0', 0])]
        ]);

        $user = User::create([
            'branch_id'         => $this->branch_id,
            'firstname'         => $this->firstname,
            'lastname'          => $this->lastname,
            'phone'             => $this->phone,
            'birthday'          => $this->birthday,
            'address'           => $this->address,
            'avatar'            => $this->avatar,
            'email'             => $this->email,
            'password'          => \Hash::make(randomPassword()),
        ]);

        if ($this->role == 'egitmenler') {
            $user->assignRole('Eğitmen');
        } else {
            $user->assignRole($this->assignedRole);
        }

        $this->branch_id = "0";
        $this->firstname = "";
        $this->lastname = "";
        $this->birthday = "";
        $this->address = "";
        $this->phone = "";
        $this->email = "";
        $this->avatar = "";
        $this->assignedRole = "0";

        $this->dispatchBrowserEvent("closeModal");
    }


     
    public function updated($propertyName)
    {
        if (auth()->user()->hasRole('Öğrenci')) {
            $this->redirect(route('dashboard'));
        }
    }


   
    


    
    

}