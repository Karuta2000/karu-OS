<?php

namespace App\Livewire\Projects\Main;

use Livewire\Component;
use App\Models\Project;
use App\Models\TaskList;


class Board extends Component
{

    public $projects;

    protected $listeners = ['updateProjectList'];

    public function render()
    {
        $this->projects = Project::all();
        return view('livewire.projects.main.board');
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
            'name' => $this->title,
            'project_id' => $project->id,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset(['title', 'image']);
    }

    
    
    public function updateProjectList(){
        
        $this->render();
    }

}
