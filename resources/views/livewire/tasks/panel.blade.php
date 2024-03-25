<div class="card mb-3 bg-black bg-gradient shadow-sm">
    <div class="card-body p-2">
        <div class="btn-group" role="group">
            <button class="btn btn-light"
                wire:click="$dispatch('showModal', {data: {'alias' : 'tasks.modals.add-modal' }})"><i
                    class="fa-solid fa-plus"></i></button>
        </div>
    </div>
</div>