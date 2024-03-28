<?php

use Livewire\Volt\Component;
use App\Models\Color;


new class extends Component{

    public $color;

    public function mount($id){
        $this->color = Color::find($id);
    }

    public function deleteColor(){
        $this->color->delete();
        $this->dispatch('colorsUpdated');
    }

}

?>


<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Remove color</h5>
    </div>
    <div class="modal-body">
        Remove color?
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click='deleteColor()'>Delete</button>
    </div>
</div>