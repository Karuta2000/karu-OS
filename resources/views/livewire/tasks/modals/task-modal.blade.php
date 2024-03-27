<?php

use Livewire\Volt\Component;
use Masmerise\Toaster\Toaster;
use App\Models\Task;

new class extends Component {
    public $title;
    public $due;
    public $priority;
    public $status;

    public $board_id;

    public $task;

    public function mount($id)
    {
        $this->task = Task::find($id);
        if($this->task != null){
            $this->title = $this->task->title;
            $this->due = $this->task->due;
            $this->priority = $this->task->priority;
            $this->status = $this->task->status;
        }
    }

    public function save(){
        $this->task->title = $this->title;
        $this->task->due = $this->due;
        $this->task->priority = $this->priority;
        $this->task->status = $this->status;
        $this->task->save();
        $this->dispatch('updateTask');
        Toaster::success('Task updated!');
    }


};

?>

<div>
    <div class="modal-header bg-warning text-light">
        <h5 class="modal-title">Task</h5>
    </div>
    <div class="modal-body">
        <div class="row">

            <label for="title" class=" col-form-label col-2">Title </label>
            <div class="col-10 mb-3">
                <input type="text" class="form-control" id="title" wire:model='title'>
            </div>
        </div>
        <div class="row">

            <label for="due" class=" col-form-label col-2">Due </label>
            <div class="col-10 mb-3">
                <input type="date" class="form-control" id="due" wire:model='due'>
            </div>
        </div>
        <div class="row">

            <label for="priority" class=" col-form-label col-2">Priority </label>
            <div class="col-10 mb-3">
                <input type="number" min="1" max="10" class="form-control" id="priority" wire:model='priority'>
            </div>
        </div>

        <div class="row">

            <label for="status" class=" col-form-label col-2">Status </label>
            <div class="col-10 mb-3">
                <select id="status" class="form-control" id="status" wire:model='status'>
                    <option value="not started">Not started</option>
                    <option value="in progress">In progress</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='save()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>
