<?php

namespace App\Livewire\Projects\Project;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{

    public $project;
    public $task_list;
    public $id;

    public $habits;

    public function render()
    {
        return view('livewire.project.project');
    }

    public function mount(){
        $this->project = ModelsProject::find($this->id);
        $this->task_list = $this->project->task_list;
        $this->habits = $this->project->habits;
    }
}
