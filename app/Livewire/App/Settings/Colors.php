<?php

namespace App\Livewire\App\Settings;

use App\Models\Color;
use Livewire\Component;

class Colors extends Component
{

    public $colors;

    public $hex;
    public $dark;

    protected $listeners = ['colorsUpdated' => '$refresh'];

    public function render()
    {
        return view('livewire.app.settings.colors');
    }

    public function mount(){
        $this->colors = Color::all();
        $this->hex = "#FFAAAF";
        $this->dark = 0;
    }

    public function addColor(){
        Color::create([
            'hex' => $this->hex,
            'dark' => $this->dark,
        ]);

        $this->colors = Color::all();
    }
}
