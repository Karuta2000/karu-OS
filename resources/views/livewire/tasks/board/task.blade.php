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

<div class="shadow-sm card bg-gradient my-2 p-3" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.task-modal','params' :{'id':'{{ $task->id }}'}  }})">
    {{ $task->title }}
</div>