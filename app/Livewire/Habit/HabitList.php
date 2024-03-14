<?php

namespace App\Livewire\Habit;

use Livewire\Component;
use App\Models\Habit;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\HabitCompletition;

class HabitList extends Component
{
    public $habits;

    public $name;
    public $color = "#ffffff";

    public $mode = "complete";

    protected $listeners = ['updateHabitList' => '$refresh'];

    public function mount()
    {
        $this->habits = Habit::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        $this->habits = Habit::where('user_id', Auth::id())->get();
        return view('livewire.habit.habit-list');
    }

    public function doAction($id)
    {
        if ($this->mode == "complete") {

            if (HabitCompletition::where('habit_id', $id)
                ->whereDate('completed_at', Carbon::today())
                ->exists()
            ) {
                HabitCompletition::where('habit_id', $id)
                    ->whereDate('completed_at', Carbon::today())->first()->delete();
            } else {
                HabitCompletition::create([
                    'habit_id' => $id,
                    'user_id' => Auth::user()->id,
                    'completed_at' => Carbon::today(),
                ]);
            }
        }
        else {
            if($this->mode == "delete"){
                Habit::find($id)->delete();
            }
        }
    }

    public function toggle()
    {
        if ($this->completed) {
            HabitCompletition::where('habit_id', $this->habit->id)
                ->whereDate('completed_at', Carbon::today())->first()->delete();
        } else {
            HabitCompletition::create([
                'habit_id' => $this->habit->id,
                'user_id' => Auth::user()->id,
                'completed_at' => Carbon::today(),
            ]);
        }
        $this->dispatch('updateHabitList');
    }


    public function setMode($mode){
        $this->mode = $mode;
    }

    public function addHabit(){
        
        $this->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/[abcdefABCDEF0-9]/'],
        ]);

        Habit::create([
            'name' => $this->name,
            'HEXcolor' => str_replace('#', '', $this->color),
        ]);

        $this->dispatch('updateHabitList');


    }
}
