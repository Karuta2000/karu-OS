<div>
    <div class="my-4">
        <div class="mb-3 row">
            <label for="url" class=" col-form-label col-2">URL </label>
            <div class="col-10">
                <input type="text" class="form-control" id="url" wire:model='url'>
            </div>
    
            @error('url')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    

    <button class="btn btn-primary" wire:click='addImage()'>Add image</button>
    <hr>
    <h3>
        Gallery
    </h3>

    <div class="row justify-content-left">
        @foreach ($images as $image)
        <a class="col-2 shadow-sm mx-5 p-0 my-4" href="{{ $image->url }}">
            <img class="w-100" src="{{ $image->url }}">
        </a>
        @endforeach
    </div>


</div>
