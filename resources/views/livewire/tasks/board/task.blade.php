<?php

use Livewire\Volt\Component;
use App\Models\Task;

new class extends Component {
    public $task;

    public function mount($id){
        $this->task = Task::find($id);
    }

};

?>

<div class="shadow-sm card bg-gradient my-2 p-3">
    {{ $task->title }}
</div>