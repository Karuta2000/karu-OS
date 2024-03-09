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

    public $id;

    public $completed;

    protected $listeners = ["habitUpdated"];

    public function render()
    {
        $this->habit = ModelsHabit::find($this->id);
        return view('livewire.habit.habit');
    }


    public function habitUpdated($id){
        if($id==$this->id){
            $this->render();
        }
    }

    public function mount($habitId){
        $this->id = $habitId;
        $this->habit = ModelsHabit::find($this->id);
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
        $this->dispatch('updateHabitList');
    }

    public function updateHabitModal(){
        $this->dispatch('updateHabitModalValues', ['habit' => $this->habit]);
    }

    public function deleteHabit(){
        $this->habit->delete();
        $this->dispatch('updateHabitList');
    }
}
