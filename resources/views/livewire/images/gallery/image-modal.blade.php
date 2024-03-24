<?php

use Livewire\Volt\Component;
use App\Models\Image;


new class extends Component {

    public $image;

    public function mount($id){
        $this->image = Image::find($id);
    }

    public function deleteImage(){
       
        $this->image->delete();
        $this->dispatch('hideModal');
        
        $this->dispatch('updateGallery');
    }
}

?>


<div>
    <div class="modal-body">
        <img class="w-100" src="{{ $image->url }}" alt="{{ $image->id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger"  wire:click="deleteImage()"><i class="fa-solid fa-trash me-1"></i> Delete</button>
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
    </div>
    
        
</div>