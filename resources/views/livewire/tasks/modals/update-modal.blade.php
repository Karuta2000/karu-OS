<?php

use Livewire\Volt\Component;
use App\Models\Project;
use App\Models\TaskList;
use App\Models\Task;

new class extends Component {

    public $title;
    public $task;

    public $taskLists;
    public $taskList;

    public function mount($id)
    {
        $this->task = Task::find($id);
        $this->title = $this->task->title;
        $this->taskLists = TaskList::orderBy("created_at","desc")->get();
        $this->taskList = $this->task->taskList->id;
    }

    public function addTask()
    {
        $this->validate([
            'title' => 'required',
        ]);

        $oldList = $this->task->task_list_id;


        $this->task->title = $this->title;
        $this->task->task_list_id = $this->taskList;

        $this->task->save();


        $this->dispatch('taskUpdated', [
            'id' => $this->taskList,
            'old_id' => $oldList,
        ]);

        $this->reset(['title']);
    }

};

?>

<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Add project</h5>
    </div>
    <div class="modal-body">
        <div class="row">

            <label for="title" class=" col-form-label col-2">Title </label>
            <div class="col-10 mb-3">
                <input type="text" class="form-control" id="title" wire:model='title'>
            </div>
            <label for="task-list" class="col-form-label col-2">Task List </label>
            <div class="col-10">

                <select class="form-select" aria-label="Default select example" wire:model='taskList'>
                    @foreach ($taskLists as $list)
                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='addTask()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>
