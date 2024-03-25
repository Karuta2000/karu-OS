<?php

use Livewire\Volt\Component;

new class extends Component {};

?>


<div class="row justify-content-left">
    @foreach ($images as $key => $image)
        <div class="col-lg-2 col-md-4 px-3 my-3">
            <div class="mx-auto shadow clickable-card rounded"
                wire:click="$dispatch('showModal', {data: {'alias' : 'images.gallery.image-modal', 'params' :{'id':' {{ $image->id }} '}}})"
                style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ $image->url }}'); height: 250px; width: 250px;">
                <span class="badge text-bg-secondary ms-1 mt-1">{{ $image->created_at->shortRelativeDiffForHumans() }}</span>
                <span class="badge text-bg-secondary ms-1 mt-1">{{ $image->project->title }}</span>
            </div>
        </div>
    @endforeach
</div>
