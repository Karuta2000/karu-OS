<?php

namespace App\Livewire;

use Livewire\Component;

class MainPage extends Component
{
    public $test = 0;
    public function render()
    {
        return view('livewire.main-page');
    }

    public function increments(){
        $this->test++;
    }
}
