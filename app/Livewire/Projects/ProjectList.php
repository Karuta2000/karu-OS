<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;
use App\Models\TaskList;


class ProjectList extends Component
{

    public $projects;

    protected $listeners = ['updateProjectList'];

    public function render()
    {
        $this->projects = Project::all();
        return view('livewire.projects.project-list');
    }

    public function mount(){
        $this->projects = Project::all();
    }

    public function addProject(){
        $project = Project::create([
            'title' => $this->title,
            'image' => $this->image,
            'user_id' => auth()->user()->id,
        ]);

        TaskList::create([
            'name' => $this->title . ' task list',
            'user_id' => auth()->user()->id,
            'project_id' => $project->id,
        ]);

        $this->reset(['title', 'image']);
    }
    
    public function updateProjectList(){
        
        $this->render();
    }

}
