<?php

use Livewire\Volt\Component;

use App\Models\TaskBoard;
use Illuminate\Support\Facades\Auth;


new class extends Component {

    public $boards;

    public function mount(){
        $this->boards = TaskBoard::where('user_id', Auth::id())->get();
    }
}

?>

<div>
    <div class="row">
        @foreach ($boards as $key => $board)
            <div class="col-3 p-3">
                <livewire:tasks.board.main id="{{ $board->id }}" />
            </div>
        @endforeach
    </div>
</div>