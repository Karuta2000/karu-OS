<?php

namespace App\Livewire\Project;

use Livewire\Component;
use App\Models\Project;


class ProjectList extends Component
{

    public $projects;

    protected $listeners = ['updateProjectList'];

    public function render()
    {
        $this->projects = Project::all();
        return view('livewire.project.project-list');
    }

    public function mount(){
        $this->projects = Project::all();
    }

    public function addProject(){
        Project::create([
            'title' => $this->title,
            'image' => $this->image,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset(['title', 'image']);
    }
    
    public function updateProjectList(){
        
        $this->render();
    }

}
