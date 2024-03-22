<?php

namespace App\Livewire\Images;
use App\Models\Image;

use App\Models\Project;
use Livewire\Component;

class Gallery extends Component
{

    public $images;

    public $project;

    protected $listeners = ['addedNewImage'];
    
    public function render()
    {
        return view('livewire.images.gallery');
        
    }

    public function mount($id){
        if($id){
            $this->project = Project::find($id);
        }

        $this->setImages();
    }


    private function setImages(){
        if($this->project){
            $this->images = $this->project->images();      
        }
        else{
            $this->images = Image::where("user_id", auth()->user()->id)->get();
        }
    }


    public function addedNewImage(){
        $this->setImages();
        $this->render();
    }
}
