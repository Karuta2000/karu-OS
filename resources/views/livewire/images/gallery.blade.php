<div class="row justify-content-left">
    @foreach ($images as $image)
    <div class="col-lg-2 col-md-4 px-3 my-3">
        <a href="#">
            <div class="mx-auto shadow clickable-card rounded" wire:click="$dispatch('showModal', {data: {'alias' : 'images.gallery.image-modal', 'params' :{'image':' {{ $image->url }} '}}})"
            style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ $image->url }}'); height: 250px; width: 250px;">
        
        </div>
        </a>
    </div>
        
    @endforeach
</div>