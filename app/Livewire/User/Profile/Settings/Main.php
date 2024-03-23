<?php

namespace App\Livewire\User\Profile\Settings;

use Livewire\Component;

class Main extends Component
{

    public $page;

    protected $listeners = ["setPage"];

    public function render()
    {
        return view('livewire.user.profile.settings.main');
    }

    public function mount(){
        $this->page = "profile_settings";
    }

    public function setPage($page){
        $this->page = $page;
    }
}
