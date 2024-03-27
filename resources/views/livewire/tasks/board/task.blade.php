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
        
    }

};

?>

<div class="shadow-sm task-card card bg-light bg-gradient my-2 p-3" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.task-modal','params' :{'id':'{{ $task->id }}'}  }})">
    <div>
        {{ $task->title }}
    </div>
    @if ($task->due != null)
    <div>
        Due: {{ Carbon::parse($task->due)->diffForHumans() }} 
    </div>

    @endif
    <div>
        <span class="badge rounded-pill text-bg-primary">{{ $task->priority }}</span>
        <span class="badge rounded-pill text-bg-primary">{{ $task->status }}</span>
    </div>
    
</div>