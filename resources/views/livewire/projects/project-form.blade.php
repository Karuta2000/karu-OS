<?php

use App\Models\User;
use App\Models\Project;
use App\Models\TaskList;

use function Livewire\Volt\state;

state([
    'title' => '',
    'image' => '',
]);

$addProject = function () {
    $project = Project::create([
        'title' => $this->title,
        'image' => $this->image,
        'user_id' => auth()->user()->id,
    ]);

    TaskList::create([
        'name' => $this->title . " task list",
        'project_id' => $project->id,
        'user_id' => auth()->user()->id,
    ]);

    $this->reset(['title', 'image']);
    $this->dispatch('updateProjectList');
};

?>

<section class="w-100">

    <div class="mb-4 card shadow-sm">
        <div class="card-header">
            Add new image
        </div>
        <div class="card-body m-3">
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
            <button class="btn btn-primary" wire:click='addProject()'>Add project</button>
        </div>


    </div>

</section>
