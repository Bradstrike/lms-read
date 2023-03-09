<?php

namespace App\Http\Livewire\App\Manage\Education;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Lesson;

class Lessons extends Component
{
    use WithFileUploads;

    public $Lessons;

    public $name;
    public $description;
    public $image;
    public $thumbnail;
    public $state = 1;
    public $tags;
    public $price = "0.99";

    public $image_1;
    public $image_2;

    public $states = [];

    public function mount()
    {
        $this->Lessons = Lesson::all();
        $this->states = $this->Lessons->toArray();
    }

    public function render()
    {
        return view('livewire.app.manage.education.lessons');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'state' => 'required',
            'tags' => 'required',
        ]);

        $this->dispatchBrowserEvent("block");
        $this->dispatchBrowserEvent("closeModal");

        if (!empty($this->image_1)) {
            $this->image = $this->image_1->store('images', 'public_uploads');
        }
        if (!empty($this->image_2)) {
            $this->thumbnail = $this->image_2->store('thumbnails', 'public_uploads');
        }        

        Lesson::create([
            'name'          => $this->name,
            'description'   => $this->description,
            'image'         => $this->image,
            'thumbnail'     => $this->thumbnail,
            'price'         => $this->price,
            'state'         => $this->state,
            'tags'          => $this->tags,
        ]);

        $this->name = "";
        $this->description = "";
        $this->image = "";
        $this->thumbnail = "";
        $this->price = "";
        $this->image_1 = null;
        $this->image_2 = null;
        $this->tags = "";

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");

        $this->dispatchBrowserEvent("closeModal");
    }
}
