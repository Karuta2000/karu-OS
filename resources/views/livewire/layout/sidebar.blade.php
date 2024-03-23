<div class="sidebar bg-black bg-gradient text-light shadow py-3">
    <div class="mx-auto">
        <div class="dropend mx-auto text-center">
            <button class=" mx-auto px-3" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="sidebar-avatar mx-auto" style="background-image: url('{{ auth()->user()->avatar }}')">
                </div>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('user.profile', ['id' => auth()->id()]) }}" wire:navigate><i class="fa-solid fa-user me-1"></i> {{ auth()->user()->name }}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('user.settings') }}"><i class="fa-solid fa-gear me-1"></i> Profile settings</a></li>
                <li><a class="dropdown-item" href="#" wire:click='logout'><i class="fa-solid fa-right-from-bracket me-1"></i> Logout</a></li>
            </ul>
        </div>

        <div class="nav flex-column py-3">
            <div class="p-1 text-center nav-item">
                <a class="h4 w-75 p-3 rounded mx-auto nav-link {{ Request::routeIs('dashboard') ? 'active-sidebar-link' : 'sidebar-link text-light' }}"
                    href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i>
                </a>
            </div>
            <div class="p-1 text-center nav-item">
                <a class="h4 w-75 p-3 rounded mx-auto nav-link {{ Request::routeIs('projects') ? 'active-sidebar-link' : 'sidebar-link text-light' }}"
                    href="{{ route('projects') }}">
                    <i class="fa-solid fa-globe"></i>
                </a>
            </div>
            <div class="p-1 text-center nav-item">
                <a class="h4 w-75 p-3 rounded mx-auto nav-link {{ Request::routeIs('habits') ? 'active-sidebar-link' : 'sidebar-link text-light' }}"
                    href="{{ route('habits') }}">
                    <i class="fa-solid fa-gamepad"></i>
                </a>
            </div>
            <div class="p-1 text-center nav-item">
                <a class="h4 w-75 p-3 rounded mx-auto nav-link {{ Request::routeIs('gallery') ? 'active-sidebar-link' : 'sidebar-link text-light' }}"
                    href="{{ route('gallery') }}">
                    <i class="fa-solid fa-image"></i>
                </a>
            </div>
            <div class="p-1 text-center nav-item">
                <a class="h4 w-75 p-3 rounded mx-auto nav-link {{ Request::routeIs('tasks') ? 'active-sidebar-link' : 'sidebar-link text-light' }}"
                    href="{{ route('tasks') }}">
                    <i class="fa-solid fa-list-check"></i>
                </a>
            </div>
        </div>
    </div>
</div>
