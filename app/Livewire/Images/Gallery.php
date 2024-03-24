<?php

namespace App\Livewire\Images;
use App\Models\Image;

use App\Models\Project;
use Livewire\Component;

class Gallery extends Component
{

    public $test;
    public $images;

    public $project;

    public $sort;

    public $sortedImages;

    protected $listeners = ['updateGallery', 'updateSort'];
    
    public function render()
    {
        return view('livewire.images.gallery');
        
    }

    public function mount($id){
        if($id){
            $this->project = Project::find($id);
        }

        $this->sort = "by newest";

        $this->setImages();
    }


    private function sortImages(){
        if($this->sort == 'by newest'){
            $this->images = Image::where("user_id", auth()->user()->id)->get()->sortByDesc("created_at");

        }
        if($this->sort == 'by oldest'){
            $this->images = Image::where("user_id", auth()->user()->id)->get()->sortBy("created_at");
        }
        return $this->sortedImages;
    }


    private function setImages(){
        if($this->project){
            $this->images = $this->project->images;      
        }
        else{
            $this->images = Image::where("user_id", auth()->user()->id)->get();
        }
    }


    public function updateGallery(){
        $this->setImages();
        $this->sortImages();
        $this->render();
    }

    public function updateSort($sort){
        $this->sort = $sort;
        $this->updateGallery();
    }
}
