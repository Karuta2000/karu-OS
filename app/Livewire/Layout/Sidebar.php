<?php

namespace App\Livewire\Layout;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    
    public $avatar;

    protected $listeners = ['userUpdated'];

    public function render()
    {
        return view('livewire.layout.sidebar');
    }

    public function mount(){
        $this->avatar = Auth::user()->avatar;
    }


    public function userUpdated(){
        $this->avatar = Auth::user()->avatar;
    }

    public function logout(Logout $logout){
        $logout();

        $this->redirect('/', navigate: true);
    }
}
