<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

class Card extends Component
{

    public $project;


    public function mount($id){
        $this->project = Project::find($id);
    }

    public function render()
    {
        return view('livewire.projects.card');
    }
}
