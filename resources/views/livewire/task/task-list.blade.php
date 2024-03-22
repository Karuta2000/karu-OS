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

                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
                <button class="btn btn-primary mt-4" type="submit">Add Task</button>
            </form>
        </div>
    </div>

    <div class="row">
        @foreach ($taskLists as $list)
            <div class="col-3 p-3">
                <div class="card shadow-sm">




                    <div class="card-header">{{ $list->name }}</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @empty($list->tasks)
                                Seznam prázdný
                            @else
                                @foreach ($list->tasks as $task)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $task->title }}
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <input type="checkbox" class="btn-check" id="task{{ $task->id }}"
                                                {{ $task->completed == 1 ? 'checked' : '' }} autocomplete="off"
                                                wire:click='completeTask({{ $task->id }})'>
                                            <label class="btn btn-outline-primary" for="task{{ $task->id }}"><i
                                                    class="fa-solid fa-check"></i></label>
                                            <button type="button" class="btn btn-danger"
                                                wire:click="deleteTask({{ $task->id }})"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </li>
                                @endforeach
                            @endempty



                        </ul>
                    </div>
                </div>

            </div>
        @endforeach
        
    </div>



</div>
