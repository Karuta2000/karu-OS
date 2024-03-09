<?php

namespace App\Livewire\Habit;

use Livewire\Component;
use App\Models\Habit;
use Illuminate\Support\Facades\Auth;

class HabitList extends Component
{
    public $habits;

    protected $listeners = ['updateHabitList' => '$refresh'];

    public function mount(){
        $this->habits = Habit::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        $this->habits = Habit::where('user_id', Auth::id())->get();
        return view('livewire.habit.habit-list');
    }
}
