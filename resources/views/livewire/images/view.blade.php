<div>
    <div class="card mb-3 bg-black bg-gradient shadow">
        <div class="card-body p-2 d-flex justify-content-evenly">
            <div class="w-100">
                <div class="btn-group" role="group">
                    <button class="btn btn-light"
                        wire:click="$dispatch('showModal', {data: {'alias' : 'images.gallery.add-modal' }})"><i
                            class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-light"
                        wire:click="updateGallery()"><i class="fa-solid fa-rotate-right"></i></button>
                </div>
            </div>
            <div class="flex-shrink-2">
                <select class="form-select" wire:model='sort' wire:change='sortChanged'>
                    <option value="by newest" selected>From newest</option>
                    <option value="by oldest">From oldest</option>
                </select>
            </div>


        </div>
    </div>

    
    <livewire:images.gallery id="{{}}">

</div>
