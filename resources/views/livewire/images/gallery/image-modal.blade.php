<?php

use Livewire\Volt\Component;


new class extends Component {

    public $image;

    public function mount($image){
        $this->image = $image;
    }
}

?>


<div>
    <div class="modal-body">
        <img class="w-100" src="{{ $image }}" alt="">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')"></button>
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
    </div>
    
        
</div>