<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;
use Livewire\Attributes\On;
use Masmerise\Toaster\Toaster;

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

    public function clearBoard()
    {
        foreach ($this->tasks as $key => $task) {
            $task->delete();
        }
        $this->tasks = $this->board->tasks;
        $this->dispatch('updateBoard');
        Toaster::success('Board cleared!');
    }

    public function deleteBoard()
    {
        $board = TaskBoard::find($this->board->id);
        $board->delete();
        $this->dispatch('boardDeleted');
        Toaster::success('Board deleted!');

    }

};

?>

<div>
    <div class="card">
        <div class="card-header bg-gradient p-3" style="background-color: {{ $board->color->hex }}44">

            <div class="d-flex p-0 h5 m-0">
                <div class="flex-grow-1">
                    {{ $board->title }} <span class="badge rounded-pill text-bg-light">{{ $board->tasks->count() }}</span>
                </div>
                <div>
                    <div class="dropdown">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" wire:click='deleteBoard()'>Delete</a></li>
                            <li><a class="dropdown-item" href="#" wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.update-board-modal','params' :{'id':'{{ $board->id }}'}  }})">Update</a></li>
                            <li><a class="dropdown-item" href="#" wire:click='clearBoard()'>Clear</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-transparent task-board">
        @foreach ($tasks as $key => $task)
            <livewire:tasks.board.task id="{{ $task->id }}" :key="$task->id" />
        @endforeach
    </div>
    <div class="p-0">
        <button class="btn btn-light shadow-sm w-100"
            wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.add-task-modal','params' :{'board':'{{ $board->id }}'}  }})">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
</div>
