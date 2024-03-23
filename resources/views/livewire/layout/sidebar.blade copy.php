<div class="sidebar bg-dark text-light">
    <div class="justify-between px-3 py-4 flex flex-wrap">
            <div class="mb-3 w-100">
                <x-dropdown class="w-100" align="left" width="110">
                    <x-slot name="trigger">
                        <button class="px-3 transparent text-sm leading-4 font-medium rounded-md w-100">
                            <div>
                                <img class="h-20 w-20 rounded-full mx-auto mb-2" src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}">
                                <div class="h5" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link class="text-decoration-none new-full text-start" :href="route('user.profile', ['id' => auth()->id() ])" wire:navigate>
                            <i class="fa-solid fa-user"></i> {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link class="text-decoration-none new-full text-start" :href="route('user.settings')" wire:navigate>
                            <i class="fa-solid fa-gear"></i> {{ __('Profile settings') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link class="text-decoration-none">
                                <i class="fa-solid fa-right-from-bracket"></i> {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="mt-3 mb-3 ms-5 w-100 text-light">
                <x-nav-link class="text-decoration-none text-center text-light" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    <i class="fa-solid fa-house me-1"></i> {{ __('Home') }}
                </x-nav-link>
            </div>

            <div class="mb-3 ms-5 w-100">
                <x-nav-link class="text-decoration-none text-light" :href="route('projects')" :active="request()->routeIs('projects')" wire:navigate>
                    <i class="fa-solid fa-globe me-1"></i> {{ __('Projects') }}
                </x-nav-link>
            </div>
            <div class="mb-3 ms-5 w-100">
                <x-nav-link class="text-decoration-none text-light" :href="route('habits')" :active="request()->routeIs('habits')" wire:navigate>
                    <i class="fa-solid fa-gamepad me-1"></i> {{ __('Habits') }}
                </x-nav-link>
            </div>
            <div class="mb-3 ms-5 w-100">
                <x-nav-link class="text-decoration-none text-light" :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                    <i class="fa-solid fa-image me-1"></i> {{ __('Gallery') }}
                </x-nav-link>
            </div>
            <div class="mb-3 ms-5 w-100">
                <x-nav-link class="text-decoration-none text-light" :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
                    <i class="fa-solid fa-list-check me-1"></i> {{ __('Tasks') }}
                </x-nav-link>
            </div>

            

        </div>
</div>
