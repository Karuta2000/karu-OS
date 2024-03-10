<div>
    <div class="container">
        <div class="mb-4 card shadow-sm">
            <div class="card-header">
                Add new image
            </div>
            <div class="card-body m-3">
                <div class="mb-3 row">
                    <label for="url" class=" col-form-label col-2">URL </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="url" wire:model='url'>
                    </div>
        
                    @error('url')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary" wire:click='addImage()'>Add image</button>
            </div>
            
            
        </div>
    </div>
    


    <div class="row justify-content-left container-fluid">
        @foreach ($images as $image)
        <div class="col-2 px-3 my-3">
            <a href="{{ $image->url }}">
                <img class="w-100 mx-auto shadow-sm gallery-image" src="{{ $image->url }}">
            </a>
        </div>
            
        @endforeach
    </div>




</div>
