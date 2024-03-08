<?php

namespace App\Livewire\Habit;

use App\Models\Habit as ModelsHabit;
use App\Models\HabitCompletition;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Habit extends Component
{

    public $habit;

    public $completed;

    public function render()
    {
        return view('livewire.habit.habit');
    }

    public function mount($habitId){
        $this->habit = ModelsHabit::find($habitId);
        $this->completed = HabitCompletition::where('habit_id', $this->habit->id)
        ->whereDate('completed_at', Carbon::today())
        ->exists();
    }

    public function toggle(){
        if($this->completed){
            HabitCompletition::where('habit_id', $this->habit->id)
        ->whereDate('completed_at', Carbon::today())->first()->delete();
        }
        else {
            HabitCompletition::create([
                'habit_id' => $this->habit->id,
                'user_id' => Auth::user()->id,
                'completed_at' => Carbon::today(),
            ]);
        }

        $this->completed = !$this->completed;
    }

    public function deleteHabit(){
        $this->habit->delete();
        $this->dispatch('updateHabitList');
    }
}
