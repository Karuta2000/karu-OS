<?php

namespace App\Livewire\Projects\Project;

use App\Models\Project;;
use Livewire\Component;

class View extends Component
{

    public $project;
    public $task_list;
    public $id;

    public $habits;

    public function render()
    {
        return view('livewire.projects.project.view');
    }

    public function mount(){
        $this->project = Project::find($this->id);
        $this->task_list = $this->project->task_list;
        $this->habits = $this->project->habits;
    }
}
