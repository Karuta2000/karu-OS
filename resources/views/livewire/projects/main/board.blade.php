<div class="row justify-content-left">
    @foreach ($projects as $project)
        <div class="col-2">
            <livewire:projects.card id="{{$project->id}}" />
        </div>
    @endforeach
</div>
