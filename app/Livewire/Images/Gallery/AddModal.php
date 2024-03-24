<?php

namespace App\Livewire\Images\Gallery;

use App\Models\Image;
use App\Models\Project;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class AddModal extends Component
{

    public $url;
    public $projects;
    public $pickedProject;

    public function mount(){
        $this->projects = Project::all();
        $this->pickedProject = $this->projects->first()->id;
    }
    
    public function render()
    {
        return view('livewire.images.gallery.add-modal');
    }

    public function addImage(){
        Image::create([
            'url' => $this->url,
            'user_id' => auth()->user()->id,
            'project_id' => $this->pickedProject,
        ]);
        $this->reset('url');

        $this->dispatch('updateGallery');
        Toaster::success('Image added!');
    }
}
