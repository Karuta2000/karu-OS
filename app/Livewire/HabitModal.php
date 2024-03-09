<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Habit;

class HabitModal extends Component
{

    public $habit;
    public $name;
    public $color = 'ffffff';
    public $modalTitle = "Add new habit";

    protected $listeners = ['updateHabitModalValues', 'resetModal'];

    public function render()
    {
        return view('livewire.habit-modal');
    }

    public function updateHabits(){
        
        $this->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/[abcdefABCDEF0-9]/'],
        ]);

        if($this->habit){
            $this->habit->update(['name' => $this->name, 'HEXcolor' => $this->color]);
            $this->dispatch('habitUpdated', [$this->habit->id]);
            reset($this->habit);
        }
        else{
            Habit::create([
                'name' => $this->name,
                'HEXcolor' => $this->color,
            ]);
        }

        $this->resetModal();
        $this->dispatch('updateHabitList');


    }

    public function updateHabitModalValues(Habit $habit){
        $this->habit = $habit;
        $this->name = $this->habit->name;
        $this->color = $this->habit->HEXcolor;
        $this->modalTitle = "Update habit";
    }

    public function resetModal(){
        $this->reset(["name","color", "modalTitle", "habit"]);
    }

}
