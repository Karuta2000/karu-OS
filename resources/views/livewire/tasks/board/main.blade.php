<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;
use Livewire\Attributes\On; 

new class extends Component {
    public $board;
    public $tasks;

    protected $listeners = ['updateBoard' => 'refresh'];

    public function mount($id)
    {
        $this->board = TaskBoard::find($id);
        $this->tasks = $this->board->tasks;
    }

    

    public function hydrate()
    {
        $this->tasks = $this->board->tasks;
    }

};





?>

<div class="card shadow bg-gradient" style="background-color: {{ $board->color->hex }}44">
    <div class="card-header bg-transparent p-3">
        <p class="m-0 h5">
            {{ $board->title }}
        </p>
    </div>
    <div class="card-body bg-transparent">
        @foreach ($tasks as $key => $task)
            <livewire:tasks.board.task id="{{ $task->id }}"  :key="$task->id"  />
        @endforeach
    </div>
    <div class="card-footer p-0">
        <button class="btn bg-transparent w-100"
            wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.add-task-modal','params' :{'board':'{{ $board->id }}'}  }})">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
</div>
