<div>
    <div class="row">
        <div class="col-4">
            <div class="project-image" style="background-image: url('{{ $project->image }}')"></div>

            <div class="card shadow-sm mt-3">




                <div class="card-header">{{ $project->task_list->name }}</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @empty($project->task_list->tasks)
                            Seznam prázdný
                        @else
                            @foreach ($project->task_list->tasks as $task)
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
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $project->title }}</h4>
                    <p class="card-text">Text</p>
                </div>


            </div>
            <div class="mt-4 row">
                @foreach ($habits as $habit)
                    <div class="col-md-3 mb-5">
                        <div class="card clickable-card"
                            style="background-color: #{{ $habit->HEXcolor }}99; color: #{{ $habit->isHexColorDark() }}; opacity: {{ $habit->todayCompleted == '[]' ? 1 : 0.5 }}; cursor: pointer; height: 200px; width: 200px;"
                            wire:click='doAction({{ $habit->id }})'>
                            <div class="card-body d-flex justify-content-center align-items-center">

                                <p>{{ $habit->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

        </div>
    </div>
    <hr>
    <livewire:images.gallery id="{{$project->id}}">




</div>
