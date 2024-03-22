<div>
    <div>
        <div class="mb-4 card shadow-sm">
            <div class="card-header">
                Add new image
            </div>
            <div class="card-body m-3">
                <div class="mb-3 row">
                    <label for="url" class=" col-form-label col-2">URL </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="url" wire:model='url'>
                    </div>
        
                    @error('url')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="url" class=" col-form-label col-2">Project </label>
                    <div class="col-10">
                        <select class="form-select" aria-label="Default select example" wire:model='pickedProject'>
                            @foreach ($projects as $project)
                            
                                <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    @error('pickedProject')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary" wire:click='addImage()'>Add image</button>
            </div>
            
            
        </div>
    </div>
    

    <livewire:images.gallery id="">
    




</div>
