<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Habit;

class HabitModal extends Component
{
    public $name;
    public $color = 'fff';

    public function render()
    {
        return view('livewire.habit-modal');
    }

    public function saveHabit(){

        $this->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/[abcdefABCDEF0-9]/'],
        ]);

        Habit::create([
            'name' => $this->name,
            'HEXcolor' => $this->color,
        ]);

        $this->reset(['name', 'color']);
        $this->dispatch('updateHabitList');


    }
}
