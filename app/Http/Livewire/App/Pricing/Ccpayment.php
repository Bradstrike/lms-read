<?php

namespace App\Http\Livewire\App\Pricing;

use Livewire\Component;
use Mews\PayTr\Payment;
use App\Models\Lesson;

class Ccpayment extends Component
{
	public $lesson;

	public function mount()
	{
		$this->lesson = Lesson::findOrFail(request('egitim'));
	}

	public function render()
	{
		return view('livewire.app.pricing.ccpayment');
	}
}
