<?php

namespace App\Livewire\User\Profile\Settings;

use Livewire\Component;

class Navigation extends Component
{
    public $page;



    public function render()
    {
        return view('livewire.user.profile.settings.navigation');
    }

    public function mount(){
        $this->page = "profile_settings";
    }

    public function setPage($page){
        $this->page = $page;
        $this->dispatch('setPage', $page);
    }

}
