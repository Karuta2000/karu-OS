<?php

use Livewire\Volt\Component;
use App\Models\Image;

new class extends Component {
    public $image;

    public function mount($id)
    {
        $this->image = Image::find($id);
    }
};

?>

<div class="mx-auto shadow clickable-card rounded"
    wire:click="$dispatch('showModal', {data: {'alias' : 'images.gallery.image-modal', 'params' :{'id':' {{ $image->id }} '}}})"
    style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ $image->url }}'); height: 250px; width: 250px;">
    <span class="badge text-bg-secondary ms-1 mt-1">{{ $image->created_at->diffForHumans() }}</span>
    <span class="badge text-bg-secondary ms-1 mt-1">{{ $image->project->title }}</span>
</div>
