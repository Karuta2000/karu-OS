<div class="row justify-content-left">
    @foreach ($images as $image)
    <div class="col-lg-2 col-md-4 px-3 my-3">
        <a href="{{ $image->url }}">
            <div class="mx-auto shadow clickable-card rounded" 
            style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ $image->url }}'); height: 250px; width: 250px;">
        
        </div>
        </a>
    </div>
        
    @endforeach
</div>