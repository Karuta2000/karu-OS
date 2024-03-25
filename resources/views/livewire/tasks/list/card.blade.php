<?php

use Livewire\Volt\Component;
use App\Models\TaskList;


new class extends Component {

    public $list;
    public $tasks;

    protected $listeners = [
        'updateTaskList', 'taskUpdated'
    ];

    public function mount($id){
        $this->list = TaskList::find($id);
        $this->loadTasks();
    }

    public function updateTaskList($id){
        if($this->list->id == $id){
            $this->loadTasks();
        }
    }

    private function loadTasks(){
        $this->tasks = $this->list->tasks;
    }

    public function taskUpdate($id, $old_id){
        if($this->list->id == $id || $this->list->old_id == $id ){
            $this->loadTasks();
        }
    }

}

?>

<div class="card shadow-sm">

    <div class="card-header">{{ $this->list->name }}</div>

    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @empty($list->tasks)
                Seznam prázdný
            @else
                @foreach ($list->tasks as $key => $task)
                    <livewire:tasks.list.task id="{{ $task->id }}" wire:key="{{ $task->id }}" />
                @endforeach
            @endempty



        </ul>
    </div>
    
</div>