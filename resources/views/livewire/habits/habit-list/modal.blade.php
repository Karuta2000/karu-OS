<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Add habit</h5>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <div class="mb-3 row">
                    <label for="name" class=" col-form-label col-2">Name: </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="name" wire:model='name'>
                    </div>
    
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 row">
                    <label for="name" class=" col-form-label col-2">Color</label>
                    <div class="col-10">
                        <input type="color" class="form-control" max="6" min="6" id="color"
                            wire:model='color'>
                    </div>
    
                    @error('color')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 row">
                    <label for="name" class=" col-form-label col-2">Project</label>
                    <div class="col-10">
                        <select class="form-select" aria-label="Default select example" wire:model='habitProject'>
                            <option>Bez projektu</option>
                            @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    @error('color')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
        <button type="button" class="btn btn-primary" wire:click='addHabit()' data-bs-dismiss="modal">Save
            changes</button>
    </div>
</div>