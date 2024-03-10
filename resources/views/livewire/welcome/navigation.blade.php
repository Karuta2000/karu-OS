<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">karu OS</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @auth
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/dashboard') }}" wire:navigate>Dashboard</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" wire:navigate>Log in</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" wire:navigate>Register</a>
                    </li>
                @endif



            @endauth

        </ul>
    </div>
</nav>
