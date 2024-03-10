
    
    <div class="row justify-content-left mx-0">
        @foreach ($projects as $project)
        <div class="col-3">
            <div class="card shadow-sm mb-4" style="width: 18rem;">
                <div class="card-img-wrapper" style="background-image: url('{{ $project->image }}'); background-size: cover; background-position: center; height: 200px;"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>

    




