<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class TaskList extends Component
{

    public $title = "test";

    public $tasks;

    public function render()
    {
        $this->tasks = Task::all();
        return view('livewire.task.task-list');
    }


    public function add(){

        $this->validate([
            'title' => 'required',
        ]);

        Task::create([
            'title' => $this->title,
            'user_id' => auth()->id(),
        ]);

        $this->reset(['title']);
    }


    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
    }

    public function completeTask($id){
        $task = Task::find($id);

        $task->completed == 0 ? $task->completed = 1: $task->completed = 0;
        
        $task->save();
    }
}
