<?php

use Livewire\Volt\Component;
use App\Models\Project;
use App\Models\TaskList;

new class extends Component {
    public $projects;

    public $title;
    public $image;

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function addProject()
    {
        $project = Project::create([
            'title' => $this->title,
            'image' => $this->image,
            'user_id' => auth()->user()->id,
        ]);

        TaskList::create([
            'name' => $this->title,
            'project_id' => $project->id,
            'user_id' => auth()->user()->id,
        ]);

        $this->dispatch('updatedProjects');
    }
};

?>

<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Add project</h5>
    </div>
    <div class="modal-body">
        <div class="mb-3 row">
            <label for="title" class=" col-form-label col-2">Title </label>
            <div class="col-10">
                <input type="text" class="form-control" id="title" wire:model='title'>
            </div>

            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="image" class=" col-form-label col-2">Image </label>
            <div class="col-10">
                <input type="text" class="form-control" id="image" wire:model='image'>
            </div>

            @error('image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='addProject()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>