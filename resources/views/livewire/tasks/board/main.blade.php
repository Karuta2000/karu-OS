<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;

new class extends Component {
    public $board;

    public function mount($id)
    {
        $this->board = TaskBoard::find($id);
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
        <div class="card shadow-sm bg-transparent my-2 p-3">
            test
        </div>
    </div>
    <div class="card-footer p-0">
        <button class="btn btn-light w-100">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
</div>
