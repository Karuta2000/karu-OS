<?php

namespace App\Livewire\Gallery;

use App\Models\Image;
use Livewire\Component;

class Gallery extends Component
{

    public $url;

    public $images;
    public function render()
    {
        $this->images = Image::where("user_id", auth()->user()->id)->get();
        return view('livewire.gallery.gallery');
    }

    public function addImage(){
        Image::create([
            'url' => $this->url,
            'user_id' => auth()->user()->id,
        ]);
        $this->reset('url');
    }
}
