<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add habit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <label for="name">Name: </label>
                <input type="text" id="name" wire:model='name'>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="color">Name: </label>
                <input type="text" id="color" max="6" min="3" wire:model='color'>
                @error('color')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click='saveHabit()'>Save changes</button>
        </div>
    </div>
</div>
