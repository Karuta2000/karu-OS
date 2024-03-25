<div>
    <div class="modal-header bg-primary text-light">
        <h5 class="modal-title">Remove color</h5>
    </div>
    <div class="modal-body">
        Remove color?
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  wire:click="$dispatch('hideModal')">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
            changes</button>
    </div>
</div>