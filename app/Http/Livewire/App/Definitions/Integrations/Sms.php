<?php

namespace App\Http\Livewire\App\Definitions\Integrations;

use Livewire\Component;
use App\Models\Integration;

class Sms extends Component
{

    public $definition_type = "SMS";
    public $name;
    public $config;

    public $integrations;
    public $states = [];

    public function mount()
    {
        $this->integrations = Integration::where('definition_type', 'sms')->get();
        $this->states = $this->integrations->toArray();
    }

    public function render()
    {
        return view('livewire.app.definitions.integrations.sms');
    }

    public function save($id, $index)
    {
        $this->dispatchBrowserEvent("block");

        $item = Integration::find($id);
        $item->update([
            'config'    => $this->states[$index]["config"]
        ]);

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");
    }

    public function delete($id)
    {
        $this->dispatchBrowserEvent("block");

        $integration = Integration::find($id);
        $integration->delete();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");

        $this->mount();
    }

    public function store()
    {
        $this->dispatchBrowserEvent("closeModal");
        $this->dispatchBrowserEvent("block");

        $validatedData = $this->validate([
            'definition_type'   => 'required',
            'name'              => 'required',
            'config'            => 'required',
        ]);

        Integration::create([
            'definition_type'   => $this->definition_type,
            'name'              => $this->name,
            'config'            => $this->config
        ]);

        $this->name = "";
        $this->config = "";

        $this->mount();

        $this->dispatchBrowserEvent("closeModal");
        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");
    }
}
