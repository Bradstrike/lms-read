<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;

class BuyLessonBt extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
            <div class="row">
            <div class="col-md-4">
              <div class="card h-md-100 shadow-sm">
                <div class="card-body d-flex flex-column flex-center">
                  <img src="/assets/media/banks/ziraat.png" class="h-100px" alt="">
                  <p class="text-start">
                    <strong>Şube Kodu:</strong> 0015<br>
                    <strong>Hesap Numarası:</strong> TR45<br>
                    <strong>IBAN:</strong> TR45<br>
                    <strong>Hesap Sahibi:</strong> TR45<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-md-100 shadow-sm">
                <div class="card-body d-flex flex-column flex-center">
                  <img src="/assets/media/banks/teb.png" class="h-100px py-5" alt="">
                  <p class="text-start">
                    <strong>Şube Kodu:</strong> 0015<br>
                    <strong>Hesap Numarası:</strong> TR45<br>
                    <strong>IBAN:</strong> TR45<br>
                    <strong>Hesap Sahibi:</strong> TR45<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
            </div>
        blade;
    }
}
