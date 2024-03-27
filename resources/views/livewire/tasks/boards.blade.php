<?php

use Livewire\Volt\Component;

use App\Models\TaskBoard;
use Illuminate\Support\Facades\Auth;


new class extends Component {

    public $boards;

    protected $listeners = ['boardAdded'];

    public function mount(){
        $this->boards = TaskBoard::where('user_id', Auth::id())->get();
    }

    public function hydrate()
    {
        $this->boards = TaskBoard::where('user_id', Auth::id())->get();
    }


}

?>

<div>
    <div class="overflow-x-row">
        @foreach ($boards as $key => $board)
            <div class="overflow-x-item p-2">
                <livewire:tasks.board.main id="{{ $board->id }}" />
            </div>
        @endforeach
    </div>
</div>