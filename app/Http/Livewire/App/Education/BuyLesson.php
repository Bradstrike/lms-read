<?php

namespace App\Http\Livewire\App\Education;

use Livewire\Component;
use App\Models\Lesson;
use App\Models\Branch;


class BuyLesson extends Component
{
	public $lessons;
	public $balance;

	public $payMethod = "";

	public function mount() {
		$this->lessons = Lesson::all();

		$this->branches = Branch::all();

	}
	
	public function render()
	{
		return view('livewire.app.education.buy-lesson');
	}

	public function buy($id) {
		return redirect()->route('app.pricing.payment-methods', ['egitim' => $id]);
	}

	public function changeMethod($method)
	{
		$this->payMethod = $method;
	}
}
