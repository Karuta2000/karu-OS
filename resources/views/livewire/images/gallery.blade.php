<div class="row justify-content-left">
    @foreach ($images as $image)
    <div class="col-2 px-3 my-3">
        <a href="{{ $image->url }}">
            <img class="w-100 h-auto mx-auto shadow-sm clickable-card" src="{{ $image->url }}">
        </a>
    </div>
        
    @endforeach
</div>