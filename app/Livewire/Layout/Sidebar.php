<?php

namespace App\Livewire\Layout;
use App\Livewire\Actions\Logout;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.layout.sidebar');
    }

    public function logout(Logout $logout){
        $logout();

        $this->redirect('/', navigate: true);
    }
}
