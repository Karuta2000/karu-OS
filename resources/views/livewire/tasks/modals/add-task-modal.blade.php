<?php

use Livewire\Volt\Component;
use App\Models\Project;
use App\Models\TaskList;
use App\Models\Task;

new class extends Component {
    public $title;

    public $board_id;

    public $tasks;
    public $taskLists;
    public $taskList;

    public function mount($board)
    {

        $this->board_id = $board; 
    }

    public function addTask()
    {
        $this->validate([
            'title' => 'required',
        ]);

        Task::create([
            'title' => $this->title,
            'user_id' => auth()->id(),
            'task_list_id' => $this->board_id,
        ]);

        $this->dispatch('updateBoard', [
            'id' => $this->board_id
        ]);
    }

};

?>

<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Add task</h5>
    </div>
    <div class="modal-body">
        <div class="row">

            <label for="title" class=" col-form-label col-2">Title </label>
            <div class="col-10 mb-3">
                <input type="text" class="form-control" id="title" wire:model='title'>
            </div>
            <label for="task-list" class="col-form-label col-2">Task List </label>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='addTask()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>
