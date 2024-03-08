<?php

namespace App\Livewire\Habit;

use Livewire\Component;
use App\Models\Habit;

class HabitList extends Component
{
    public $habits;

    protected $listeners = ['updateHabitList' => 'refreshList'];

    public function refreshList(){
        $this->reset(['habits']);
        $this->habits = Habit::all();
    }

    public function render()
    {
        $this->habits = Habit::all();
        return view('livewire.habit.habit-list');
    }
}
