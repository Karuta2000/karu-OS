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


<div class="card mb-3 bg-dark shadow-sm">
    <div class="card-body p-2">
        <div class="btn-group" role="group">
            <button class="btn btn-light"
                wire:click="$dispatch('showModal', {data: {'alias' : 'projects.modals.add-modal' }})"><i
                    class="fa-solid fa-plus"></i></button>
        </div>
    </div>
</div>