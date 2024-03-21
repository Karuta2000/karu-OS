<div>
    <div class="row">
        <div class="col-4">
            <div class="project-image" style="background-image: url('{{ $project->image }}')"></div>

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




</div>
