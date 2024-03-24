<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Add habit</h5>
    </div>
    <div class="modal-body">
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
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
        <button type="button" class="btn btn-primary" wire:click='addImage()' data-bs-dismiss="modal">Save
            changes</button>
    </div>
</div>