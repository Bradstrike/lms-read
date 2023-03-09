<?php

namespace App\Http\Livewire\App\Manage\Education;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Lesson as LessonModel;
use App\Models\Exercise;
use App\Models\Lecture;

class Lesson extends Component
{
	use WithFileUploads;

	public LessonModel $lesson;
	public $exercise;

	public $selectedTab = "genel";

	public $exercise_type = 0;
	public $exercise_config;
	public $lecture_form;
	public $lecture_placements;

	public $logo;
	public $image;
	public $state;
	public $tags;
	public $price;
	public $name;
	public $description;

	public $test = "";

	public function mount($id)
	{
		$this->lesson = LessonModel::find($id);

		$this->image = $this->lesson->image;
		$this->state = $this->lesson->state;
		$this->tags = $this->lesson->tags;
		$this->price = $this->lesson->price;
		$this->name = $this->lesson->name;
		$this->description = $this->lesson->description;
	}


	public function updatedLogo()
	{
		$this->image = $this->logo->store('images', 'public_uploads');
		$this->lesson->update(['image' => $this->image]);
		$this->mount($this->lesson->id);
	}

	public function updatedState()
	{
		$this->lesson->update(['state' => $this->state]);
		$this->mount($this->lesson->id);
	}

	public function updatedTags()
	{
		$this->lesson->update(['tags' => $this->tags]);
		$this->mount($this->lesson->id);   
	}

	public function updatedPrice()
	{
		$this->lesson->update(['price' => $this->price]);
		$this->mount($this->lesson->id);   
	}

	public function updatedName()
	{
		$this->lesson->update(['name' => $this->name]);
		$this->mount($this->lesson->id);   
	}

	public function updatedDescription()
	{
		$this->lesson->update(['description' => $this->description]);
		$this->mount($this->lesson->id);   
	}

	public function updatedExerciseType()
	{
		if($this->exercise_type >= 1) {
			$this->exercise = Exercise::find($this->exercise_type);
		}else {
			$this->exercise = null;
		}
	}

	public function addLectureFromExercise()
	{
		$this->validate([
			'lecture_form.name' => 'required',
			'lecture_form.description' => 'required',
			'lecture_form.placement' => 'required',
			'lecture_form.icon' => 'required',
			'exercise_type' => 'required|not_in:0',
		]);

		$this->validate(['exercise_config' => 'required']);

		$lecture = Lecture::create([
			"lesson_id" => $this->lesson->id,
			"exercise_id" => $this->exercise_type,
			"name" => $this->lecture_form["name"],
			"description" => $this->lecture_form["description"],
			"icon" => $this->lecture_form["icon"],
			"config" => json_encode($this->exercise_config),
			"placement" => $this->lecture_form["placement"],
		]);

		$this->mount($this->lesson->id);
		$this->dispatchBrowserEvent('closeModal');
	}

	public function updatedLecturePlacements()
	{
		$i = 0;
		foreach ($this->lecture_placements as $place) {
			$lecture = Lecture::find($place["id"]);
			$lecture->update([
				'placement' => $i
			]);
			$i++;
		}

		$this->mount($this->lesson->id);
	}

	

	public function render()
	{
		return view('livewire.app.manage.education.lesson');
	}
}
