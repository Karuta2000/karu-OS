<?php

use Livewire\Volt\Component;
use App\Models\Image;

new class extends Component {
    public $image;

    public function mount($id)
    {
        $this->image = Image::find($id);
    }

    public function deleteImage()
    {
        $this->image->delete();
        $this->dispatch('hideModal');

        $this->dispatch('updateGallery');
    }

    public function setAvatar()
    {
        $user = auth()->user();
        $user->avatar = $this->image->url;
        $user->save();
        $this->dispatch('userUpdated');
    }
};

?>


<div>
    <div class="modal-body p-0">
        <img class="w-100" src="{{ $image->url }}" alt="{{ $image->id }}">
    </div>
    <div class="modal-footer">

        <div class="dropdown">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-cog"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" wire:click='setAvatar' href="#">Set Avatar</a></li>
            </ul>
        </div>

        <div class="btn-group">
            


            <button type="button" class="btn btn-danger" wire:click="deleteImage()"><i
                    class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-secondary" wire:click="$dispatch('hideModal')"><i
                    class="fa-solid fa-times"></i></button>
        </div>

    </div>


</div>
