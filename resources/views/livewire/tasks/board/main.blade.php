<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;

new class extends Component {
    public $board;
    public $tasks;

    protected $listeners = ['updateBoard'];

    public function mount($id)
    {
        $this->board = TaskBoard::find($id);
        $this->tasks = $this->board->tasks;
    }

    public function updateBoard($id){
        if($id == $this->board->id){
            $this->tasks = $this->board->tasks;
        }
    }
};

?>

<div class="card shadow bg-gradient" style="background-color: {{ $board->color->hex }}77">
    <div class="card-header p-3">
        <p class="m-0 h5">
            {{ $board->title }}
        </p>
    </div>
    <div class="card-body">
        @foreach ($tasks as $key => $task)
            <livewire:tasks.board.task id="{{ $task->id }}" />
        @endforeach
    </div>
    <div class="card-footer p-0">
        <button class="btn btn-light w-100" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.add-task-modal','params' :{'board':'{{ $board->id }}'}  }})">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
</div>
