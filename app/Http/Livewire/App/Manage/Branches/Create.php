<?php

namespace App\Http\Livewire\App\Manage\Branches;

use Livewire\Component;
use App\Models\Branch;
use App\Models\CreditCard;
use App\Models\User;

class Create extends Component
{

    public $currentStep = 1;
    public $type; // Kurum Tipi

    public $title; // Kurum Adı
    public $address; // Kurum Adresi
    public $tax_department; // Kurum Vergi Dairesi
    public $tax_number; // Kurum Vergi Numarası

    public $name; // Yetkili İsim
    public $surname; // Yetkili Soyisim
    public $phone; // Yetkili Telefon
    public $email; // Yetkili Email
    public $create_user = 0; // Yetkili Oluşturulsun == 1

    public $card_number; // Kart Numarası
    public $holder_name; // Kart Üzerindeki Ad Soyad
    public $month; // Kart SKA
    public $year; // Kart SKY
    public $cvv; // Kart Güvenlik Kodu

    public $balance = "TRY5.00"; // Hesap açılış bakiyesi
    public $ppn = "TRY1.00"; // Öğrenci başı ücret

    public function render()
    {
        return view('livewire.app.manage.branches.create');
    }

    public function step()
    {
        if ($this->currentStep == 1) {
            $validatedData = $this->validate([
                'type'              => 'required'
            ]);
        }else if ($this->currentStep == 2) {
            $validatedData = $this->validate([
                'title'             => 'required',
                'address'           => 'required',
                'tax_department'    => 'required',
                'tax_number'        => 'required'
            ]);
        }else if($this->currentStep == 3) {
            $validatedData = $this->validate([
                'name'              => 'required',
                'surname'           => 'required',
                'phone'             => 'required',
                'email'             => 'required'
            ]);
        }else if($this->currentStep == 4) {
            $validatedData = $this->validate([
                'card_number'       => 'required',
                'holder_name'       => 'required',
                'month'             => 'required',
                'year'              => 'required',
                'cvv'               => 'required',
            ]);
        }else if($this->currentStep == 5) {
            $validatedData = $this->validate([
                'balance'           => 'required',
                'ppn'               => 'required',
            ]);

            $branch = Branch::create([
                "title" => $this->title,
                "address" => $this->address,
                "name" => $this->name,
                "surname" => $this->surname,
                "phone" => $this->phone,
                "email" => $this->email,
                "tax_department" => $this->tax_department,
                "tax_number" => $this->tax_number,
                "balance" => $this->balance,
                "ppn" => $this->ppn
            ]);

            $creditCard = CreditCard::create([
                'branch_id' => $branch->id, 
                'name' => 'Varsayılan Kart',
                'holder_name' => $this->holder_name,
                'card_number' => $this->card_number,
                'cvv' => $this->cvv,
                'month' => $this->month,
                'year' => $this->cvv
            ]);

            if ($this->create_user == 1) {
                User::create([
                    'branch_id' => $branch->id,
                    'firstname' => $this->name,
                    'lastname' => $this->surname,
                    'phone' => $this->phone,
                    'address' => $this->address,
                    'avatar' => 'default.jpg',
                    'email' => $this->email,
                    'password' => \Hash::make($this->phone),
                ]);
            }

            return redirect()->route('app.manage.branches.index');
        }

        $this->currentStep++;
    }

    public function stepBack()
    {
        $this->currentStep--;
    }
}
