<?php

use Livewire\Volt\Component;
use Masmerise\Toaster\Toaster;
use App\Models\Task;

new class extends Component {
    public $title;

    public $board_id;

    public $task;

    public function mount($id)
    {
        $this->task = Task::find($id);
        if($this->task != null){
            $this->title = $this->task->title;
        }
    }

    public function save(){
        $this->task->title = $this->title;
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')">Close</button>
            <button type="button" class="btn btn-primary" wire:click='save()' data-bs-dismiss="modal">Save
                changes</button>
        </div>
    </div>
</div>
