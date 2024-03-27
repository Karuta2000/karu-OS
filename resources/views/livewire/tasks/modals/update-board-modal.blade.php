<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;

new class extends Component {
    public $board;
    public $title;
    public $description;
    public $col;

    //Public colors;
    public $colors;

    public function mount($id)
    {
        $this->board = TaskBoard::find($id);
        $this->title = $this->board->title;
        $this->description = $this->board->description;
        $this->colors = Color::all();
        $this->col = $this->board->color_id;
    }

    public function saveBoard(){
        $this->board->title = $this->title; 
        $this->board->description = $this->description;
        $this->board->color_id = $this->col;
        $this->board->save();

        $this->dispatch('updateBoard');
        Toaster::success('Board updated!');
    }
};
?>

<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title"><i
            class="fa-solid fa-list me-3"></i>Save board</h5>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" wire:model='title' class="form-control" id="inputTitle">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputDescription"  wire:model='description'></textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputColor" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <select class="form-control" id="inputColor" wire:model='col'>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->hex }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='saveBoard()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>
