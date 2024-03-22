<?php

namespace App\Livewire\Habits\HabitList;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Models\Habit;

class Modal extends Component
{
    public $name;

    public $projects;
    public $habitProject;
    public $color = "#ffffff";



    public function mount(){
        $this->projects = Project::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.habits.habit-list.modal');
    }

    public function addHabit(){
        
        $this->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/[abcdefABCDEF0-9]/'],
        ]);

        Habit::create([
            'name' => $this->name,
            'HEXcolor' => str_replace('#', '', $this->color),
            'project_id' => $this->habitProject,
        ]);

        $this->dispatch('updateHabitList');


    }
}
