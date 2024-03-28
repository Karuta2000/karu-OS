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
        $this->hex = "#ffffff";
    }

    public function addColor(){
        Color::create([
            'hex' => $this->hex,
            'dark' => 0,
            'text' => $this->isHexColorDark(),
        ]);

        $this->colors = Color::all();
    }

    private function isHexColorDark()
    {
        // Remove leading # if present
        $color = $this->hex;

        // Convert HEX to RGB
        $r = hexdec(substr($color, 1, 2));
        $g = hexdec(substr($color, 3, 2));
        $b = hexdec(substr($color, 5, 2));

        // Calculate relative luminance
        $luminance = 0.2126 * $r + 0.7152 * $g + 0.0722 * $b;

        //print $luminance;

        // Check if color is dark
        if ($luminance < 128) {
            return '#ffffff';
        } else {
            return '#000000';
        }
    }
}
