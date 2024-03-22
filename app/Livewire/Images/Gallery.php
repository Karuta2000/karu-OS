<?php

namespace App\Livewire\Images;
use App\Models\Image;

use Livewire\Component;

class Gallery extends Component
{

    public $images;

    protected $listeners = ['addedNewImage'];
    
    public function render()
    {
        return view('livewire.images.gallery');
        
    }

    public function mount($id){
        if($id){
            $this->images = Image::where("user_id", auth()->user()->id)->where("project_id", $id)->get();
            
        }
        else{
            $this->images = Image::where("user_id", auth()->user()->id)->get();
        }
    }

    public function addedNewImage(){
        $this->render();
    }
}
