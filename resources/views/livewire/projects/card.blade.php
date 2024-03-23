<a href="{{ route('project.show', ['id' => $project->id]) }}" class="text-decoration-none mx-auto">
    <div class="card project-card shadow mb-4">
        <div class="project-image"
            style="background-image: url('{{ $project->image }}')">
        </div>
        <div class="card-body">
            <h5 class="text-center">{{ $project->title }}</h5>
        </div>
    </div>
</a>
