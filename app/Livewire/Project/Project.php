<?php

namespace App\Livewire\Project;

use Livewire\Component;

class Project extends Component
{

    public $project;

    public function render()
    {
        return view('livewire.project.project');
    }
}
