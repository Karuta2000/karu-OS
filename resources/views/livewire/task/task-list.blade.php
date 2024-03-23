<div>
    <!-- livewire/task/task-list.blade.php -->
    <livewire:tasks.panel />




    <div class="row">
        @foreach ($taskLists as $key => $list)
            <div class="col-3 p-3">
                <livewire:tasks.list.card id="{{ $key }}" />

            </div>
        @endforeach
        
    </div>



</div>



<div class="card-header">{{ $this->list->name }}</div>


    
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