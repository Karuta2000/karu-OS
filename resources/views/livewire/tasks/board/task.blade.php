<?php

use Livewire\Volt\Component;
use App\Models\Task;

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
    <div>
        Updated: {{ $task->updated_at->diffForHumans() }}
    </div>
</div>