<div>
    <!-- livewire/task/task-list.blade.php -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            Add new task
        </div>
        <div class="card-body m-3">
            <form wire:submit.prevent="add">
                <div class="row">
                    <label for="title" class=" col-form-label col-2">Title </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="title" wire:model='title'>
                    </div>
                </div>

                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
                <button class="btn btn-primary mt-4" type="submit">Add Task</button>
            </form>
        </div>
    </div>


    <div class="card shadow-sm">
        <div class="card-header">Tasks</div>
        <div class="card-body m-3">
            <ul class="list-group list-group-flush">
                @foreach ($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $task->title }}
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="checkbox" class="btn-check" id="task{{ $task->id }}"
                                {{ $task->completed == 1 ? 'checked' : '' }} autocomplete="off"
                                wire:click='completeTask({{ $task->id }})'>
                            <label class="btn btn-outline-primary" for="task{{ $task->id }}"><i
                                    class="fa-solid fa-check"></i></label>
                            <button type="button" class="btn btn-danger"
                                wire:click="deleteTask({{ $task->id }})"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>


</div>
