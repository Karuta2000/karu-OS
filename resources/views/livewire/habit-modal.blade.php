<div class="modal fade" id="habitModal" tabindex="-1" aria-labelledby="habitModal" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='resetModal()'></button>
            </div>
            <div class="modal-body">
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
                        <input type="text" class="form-control" max="6" min="6" id="color"
                            wire:model='color'>
                    </div>

                    @error('color')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" wire:click='updateHabits()' data-bs-dismiss="modal">Save
                    changes</button>
            </div>
        </div>
    </div>


</div>
