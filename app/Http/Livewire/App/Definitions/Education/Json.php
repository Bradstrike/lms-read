<?php

namespace App\Http\Livewire\App\Definitions\Education;

use Livewire\Component;
use App\Models\JsonDefinition;

class Json extends Component
{
    public $JsonDefinitions;

    public $title;
    public $content;
    public $type;

    public $states = [];

    public function mount()
    {
        $this->JsonDefinitions = JsonDefinition::all();
        $this->states = $this->JsonDefinitions->toArray();
    }

    public function render()
    {
        return view('livewire.app.definitions.education.json');
    }

    public function save($id, $index)
    {
        $this->dispatchBrowserEvent("block");

        $item = JsonDefinition::find($id);
        $item->update([
            'title'         => $this->states[$index]["title"],
            'content'       => $this->states[$index]["content"],
            'type'          => $this->states[$index]["type"]
        ]);

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'type' => 'required'
        ]);

        $this->dispatchBrowserEvent("block");
        $this->dispatchBrowserEvent("closeModal");

        JsonDefinition::create($validatedData);

        $this->title = "";
        $this->content = "";
        $this->type = "";

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");

        

        $this->dispatchBrowserEvent("closeModal");
    }
}
