<?php

use Livewire\Volt\Component;
use App\Models\Task;

new class extends Component {
    public $task;
    public $completed;

    public function mount($id)
    {
        $this->task = Task::find($id);
        $this->completed = $this->task->completed;
    }

    public function complete()
    {
        if ($this->completed == 0) {
            $this->completed = 1;
        } else {
            $this->completed = 0;
        }
        $this->task->completed = $this->completed;
        $this->task->save();
    }

    public function delete()
    {
        $id = $this->task->id;
        $this->task->delete();

        $this->dispatch('updateTaskList', [
            'id' => $id,
        ]);
    }
};

?>

<li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $task->title }}
    <div class="btn-group" role="group" aria-label="Basic example">
        <input type="checkbox" class="btn-check" id="task{{ $task->id }}" {{ $completed == 1 ? 'checked' : '' }}
            autocomplete="off" wire:click='complete()'>
        <label class="btn btn-outline-primary" for="task{{ $task->id }}"><i class="fa-solid fa-check"></i></label>
        <div class="dropdown">
            <button class="btn" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.add-modal' }})"><i class="fa-solid fa-pen-to-square me-1"></i> Update</a></li>
                <li><a class="dropdown-item" href="#" wire:click="delete()"><i class="fa-solid fa-trash me-1"></i> Remove</a></li>
            </ul>
        </div>
    </div>
</li>
