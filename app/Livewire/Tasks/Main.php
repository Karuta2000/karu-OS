<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\Task;
use App\Models\TaskList;

class Main extends Component {

    public $taskLists;
    
    public function render()
    {
        return view('livewire.tasks.main');
    }



    public function mount(){
        $this->taskLists = TaskList::orderBy("created_at","desc")->get();
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
