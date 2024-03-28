<?php

namespace App\Livewire\App\Settings;

use Livewire\Component;

class Main extends Component
{

    public $page;

    public function render()
    {
        return view('livewire.app.settings.main');
    }

    public function mount(){
        $this->page = 'colors';
    }

    public function setPage($page){
        $this->page = $page;
    }
}
