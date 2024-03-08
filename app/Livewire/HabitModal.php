<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Habit;

class HabitModal extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.habit-modal');
    }

    public function saveHabit(){

        $this->validate([
            'name' => 'required'
        ]);

        Habit::create([
            'name' => $this->name,
        ]);

        $this->reset(['name']);
        $this->dispatch('updateHabitList');


    }
}
