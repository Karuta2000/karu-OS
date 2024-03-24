<div class="m-4">
    

    <div class="card p-2 mb-3">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link {{ $page == "colors" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("colors")'>Colors</a>
            </li>
        </ul>
    </div>
    

    
    @if ($page == "colors")
    
        <livewire:app.settings.colors />
    @endif


    
    
</div>