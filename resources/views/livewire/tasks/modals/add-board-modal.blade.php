<?php

use Livewire\Volt\Component;
use App\Models\TaskBoard;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $title;
    public $description;
    public $col;

    //Public colors;
    public $colors;

    public function mount()
    {
        $this->description = '';
        $this->colors = Color::all();
        $this->col = $this->colors->first()->id;
    }

    public function addBoard(){
        TaskBoard::create([
            'title' => $this->title,
            'description' => $this->description,
            'color_id' => $this->col,
            'user_id' => Auth::id(),
        ]);
    }
};
?>

<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title"><i
            class="fa-solid fa-list me-3"></i>Add board</h5>
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
            <button type="button" class="btn btn-primary" wire:click='addBoard()'>Save
                changes</button>
        </div>
    </div>
</div>
