<?php

namespace App\Http\Livewire\App\Definitions\Education;

use Livewire\Component;
use App\Models\Exercise;

class Exercises extends Component
{
    public $Exercises;

    public $name;
    public $path;  
    public $type;
    public $config;

    public $states = [];

     public function mount()
     {
         $this->Exercises = Exercise::all();
         $this->states = $this->Exercises->toArray();
     }

    public function render()
    {
        return view('livewire.app.definitions.education.exercises');
    }

    public function save($id, $index)
    {
        $this->dispatchBrowserEvent("block");

        $item = Exercise::find($id);
        $item->update([
            'name'          => $this->states[$index]["name"],
            'path'          => $this->states[$index]["path"],
            'type'          => $this->states[$index]["type"],
            'config'        => $this->states[$index]["config"],
            'file'          => $this->states[$index]["file"], 
        ]);

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");


    } 

    public function deleteExercise($id)
    {
        $this->dispatchBrowserEvent("block");

        $item = Exercise::find($id);
        $item->delete();

        redirect()->route('app.definitions.education.exercises');

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");
    }

    
    public function upload($id, $index)
    {
        $this->dispatchBrowserEvent("block");

        $item = Exercise::find($id);
        $item->update([
            'path'       => $this->states[$index]["path"],
        ]);

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");        
    } 

    public function createExerciseApp($id, $index)
    {
        $this->dispatchBrowserEvent("block");

        $item = Exercise::find($id);
        $item->update([
            'config'       => $this->states[$index]["config"],
        ]);

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");        

        $file = fopen($this->states[$index]["path"], "w") or die("Unable to open file!");
        $txt = $this->states[$index]["config"];
        fwrite($file, $txt);
        fclose($file);

        $zip = new \ZipArchive;
        $res = $zip->open($this->states[$index]["path"]);
        if ($res === TRUE) {
            $zip->extractTo(public_path('games'));
            $zip->close();
        } else {
            echo 'OLMADI!';
        }

 
     }

         



    
    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'path' => 'required',
            'type' => 'required',
            'config' => 'required',
        ]);

        $this->dispatchBrowserEvent("block");
        $this->dispatchBrowserEvent("closeModal");

        Exercise::create($validatedData);

        $this->name = "";
        $this->type = "";
        $this->path = "";
        $this->config = "";

        $this->mount();

        $this->dispatchBrowserEvent("unblock");
        $this->dispatchBrowserEvent("success");

        

        $this->dispatchBrowserEvent("closeModal");



        
        
    }
}
