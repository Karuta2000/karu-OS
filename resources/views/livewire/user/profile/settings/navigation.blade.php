<div class="card p-2 mb-3">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link {{ $page == "profile_settings" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("profile_settings")'>Profile Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $page == "avatar_banner" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("avatar_banner")'>Avatar and banner</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $page == "profile_details" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("profile_details")'>Profile Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $page == "password" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("password")'>Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $page == "delete_profile" ? "active" : "" }}" href="#" aria-current="page" wire:click='setPage("delete_profile")'>Delete Profile</a>
        </li>
    </ul>
</div>



