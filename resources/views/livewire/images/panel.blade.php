<?php

use Livewire\Volt\Component;

use Masmerise\Toaster\Toaster;

new class extends Component {

    public $sort;

    public function mount(){
        $this->sort = "by newest";
    }

    public function sortChanged(){
        $this->dispatch('updateSort', $this->sort);
        Toaster::info('Images sorted!');
    }

    public function updateGallery(){
        
        $this->dispatch('updateGallery');
        Toaster::info('Gallery refreshed!');
    }

}

?>

<div class="rounded mb-3 bg-black bg-gradient shadow">
    <div class="card-body p-2 d-flex justify-content-evenly">
        <div class="w-100">
            <div class="btn-group" role="group">
                <livewire:images.image-form />
                <button class="btn btn-light ms-2"
                    wire:click="updateGallery()"><i class="fa-solid fa-rotate-right"></i></button>
            </div>
        </div>
        <div class="flex-shrink-2">
            <select class="form-select" wire:model='sort' wire:change='sortChanged'>
                <option value="by newest" selected>From newest</option>
                <option value="by oldest">From oldest</option>
            </select>
        </div>


    </div>
</div>