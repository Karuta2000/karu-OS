<?php

namespace App\Livewire\Images;

use Livewire\Component;

class View extends Component
{
    public $sort;

    public function render()
    {
        return view('livewire.images.view');
    }

    public function mount(){
        $this->sort = "by newest";
    }

    public function sortChanged(){
        $this->dispatch('updateSort', $this->sort);
    }

    public function updateGallery(){
        
        $this->dispatch('updateGallery');
    }
}
