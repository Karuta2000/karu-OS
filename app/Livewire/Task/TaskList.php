<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\TaskList as taskListModel;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class TaskList extends Component
{

    public $title = "test";

    public $tasks;
    public $taskLists;
    public $taskList;

    public function mount(){
        $this->taskLists = TaskListModel::orderBy("created_at","desc")->get();
        $this->taskList = $this->taskLists->first();
    }

    public function render()
    {
        $this->tasks = Task::all();
        return view('livewire.task.task-list');
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
