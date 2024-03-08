<?php

namespace App\Livewire\Habit;

use Livewire\Component;
use App\Models\Habit;
use App\Models\HabitCompletition;
use Carbon\Carbon;

class HabitList extends Component
{
    public $habits;

    protected $listeners = ['updateHabitList' => 'refreshList'];

    public function refreshList(){
        $this->habits = Habit::all();
    }

    public function render()
    {

        $this->refreshList();


        return view('livewire.habit.habit-list');
    }
}
