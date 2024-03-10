<?php

namespace App\Livewire\Habit;

use Livewire\Component;
use App\Models\Habit;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HabitList extends Component
{
    public $habits;

    public $displayCompleted = true;

    protected $listeners = ['updateHabitList' => '$refresh'];

    public function mount(){
        $this->habits = Habit::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        if($this->displayCompleted){
            $this->habits = Habit::where('user_id', Auth::id())->get();
        }
        else {
            $this->habits = Habit::where('user_id', Auth::id())->whereDoesntHave('completed', function ($query) {
                $query->whereDate('completed_at', Carbon::today());
            })->get();
        }
        return view('livewire.habit.habit-list');
    }

    public function toggleCompleted(){
        $this->displayCompleted = !$this->displayCompleted;
    }
}
