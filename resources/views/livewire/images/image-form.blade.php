<?php

use Livewire\Volt\Component;
use App\Models\Image;
use App\Models\Project;
use Masmerise\Toaster\Toaster;

new class extends Component {
    public $url;
    public $projects;
    public $pickedProject;

    public function mount()
    {
        $this->projects = Project::all();
        if ($this->projects == []) {
            $this->pickedProject = $this->projects->first()->id;
        } else {
            $this->pickedProject = null;
        }
    }

    public function addImage()
    {
        Image::create([
            'url' => $this->url,
            'user_id' => auth()->user()->id,
            'project_id' => $this->pickedProject,
        ]);

        $this->reset('url');

        $this->dispatch('updateGallery');
        Toaster::success('Image added!');
    }
};

?>

<div class="dropdown">
    <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-expanded="false"
        data-bs-auto-close="outside">
        <i class="fa-solid fa-plus"></i>
    </button>
    <div class="dropdown-menu p-4" style="width: 400px;">
        <div class="mb-3 row">
            <label for="url" class=" col-form-label col-2">URL </label>
            <div class="col-10">
                <input type="text" class="form-control" id="url" wire:model='url'>
            </div>

            @error('url')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="button" class="btn btn-primary" wire:click='addImage()'>Add image</button>
      </div>
</div>
