<?php

use Livewire\Volt\Component;
use App\Models\Task;
use Carbon\Carbon;

new class extends Component {
    public $task;

    protected $listeners = ['updateTask'];

    public function mount($id){
        $this->task = Task::find($id);
    }

    public function hydrate()
    {
        $this->task = Task::find($this->task->id);
    }

    public function taskColor(){
        if($this->task->status == "not started"){
            return "bg-secondary";
        }
        if($this->task->status == "in progress"){
            return "bg-primary";
        }
        if($this->task->status == "completed"){
            return "bg-success";
        }
        if($this->task->status == "cancelled"){
            return "bg-danger";
        }
    }

    public function priorityColor(){
        if($this->task->priority < 4){
            return "text-bg-primary";
        }
        if($this->task->priority < 8){
            return "text-bg-warning";
        }
        if($this->task->priority <= 10){
            return "text-bg-danger";
        }
    }

    public function setStatus($status){
        $task = Task::find($this->task->id);
        $task->status = $status;
        $task->save();
        $this->task = $task;
    }

    public function delete(){
        $task = Task::find($this->task->id);
        $task->delete();
        $this->dispatch('updateBoard');
    }

};

?>

<div class="p-0 card pt-2 my-2 {{ $this->taskColor() }} task-card" style="border: none">
    <div class="shadow-sm bg-light bg-gradient card p-3">
        <div class="d-flex p-0 m-0">
            <div class="flex-grow-1" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.task-modal','params' :{'id':'{{ $task->id }}'}  }})">
                <div>
                    <div>
                        {{ $task->title }} <span class="badge rounded-pill {{ $this->priorityColor() }}">{{ $task->priority }}</span>
                    </div>
                    @if ($task->due != null)
                    <div>
                        Due: {{ Carbon::parse($task->due)->diffForHumans() }} 
                    </div>
                
                    @endif
                </div>
                
            </div>
            <div>
                <div class="dropdown">
                    <button class="ps-2" type="button" data-bs-toggle="dropdown" data-bs-popper-config='{"strategy":"fixed"}' aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"  wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.task-modal','params' :{'id':'{{ $task->id }}'}  }})">Change task</a></li>
                        <li><a class="dropdown-item" href="#" wire:click="delete()">Delete task</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" wire:click="setStatus('not started')">Set as not started</a></li>
                        <li><a class="dropdown-item" href="#" wire:click="setStatus('in progress')">Set as in progress</a></li>
                        <li><a class="dropdown-item" href="#" wire:click="setStatus('completed')">Set as completed</a></li>
                        <li><a class="dropdown-item" href="#" wire:click="setStatus('cancelled')">Set as cancelled</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
                
        
    </div>
</div>
