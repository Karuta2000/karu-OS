<?php

namespace App\Livewire\Images;

use Livewire\Component;

class View extends Component
{
    public $sort;

    public $test;

    public $sortModes = [
        "by newest", "by oldest"
    ];

    public function render()
    {
        return view('livewire.images.view');
    }

    public function mount(){
        $this->test ="AAA";
        $this->sort = $this->sortModes[0];
    }

    public function sortChanged(){
        $this->dispatch('updateSort', $this->sort);
    }

    public function updateGallery(){
        
        $this->dispatch('updateGallery');
    }
}
