<?php

namespace App\Livewire\User\Profile;

use Livewire\Component;
use App\Models\User;

class Main extends Component
{

    public $user;
    public $details;

    public function render()
    {
        return view('livewire.user.profile.main');
    }

    public function mount($id){
        $this->user = User::find($id);
        $this->details = $this->user->details;
    }
}
