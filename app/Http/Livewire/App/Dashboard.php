<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use Spatie\Permission\Traits\HasRoles;

class Dashboard extends Component
{
    public function render()
    {
        if (auth()->user()->hasRole("Superadmin")) {

            return view('livewire.app.dashboards.superadmin');

        }else if (auth()->user()->hasRole("Kurum Yetkilisi")) {

            return view('livewire.app.dashboards.kurumYetkilisi');

        }else if (auth()->user()->hasRole("Kurum Yöneticisi")) {

            return view('livewire.app.dashboards.kurumYoneticisi');

        }else if (auth()->user()->hasRole("Öğrenci")) {

            return view('livewire.app.dashboards.ogrenci');

        }
    }
}
