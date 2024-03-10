<div class="bg-white p-7 justify-content-center text-center shadow-sm h-100 px-1 position-fixed" style="width: 16.6%">
    <div class="flex justify-between my-1">
        <div class="flex flex-wrap">
            <div class="mb-3 w-100">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex items-center mx-auto">
                                <img class="h-8 w-8 rounded-full me-2" src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}">
                                <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            <i class="fa-solid fa-gear"></i> {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile_settings')" wire:navigate>
                            <i class="fa-solid fa-gear"></i> {{ __('Profile settings') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                <i class="fa-solid fa-right-from-bracket"></i> {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="mb-3 w-100">
                <x-nav-link class="text-decoration-none text-center" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Home') }}
                </x-nav-link>
            </div>

            <div class="mb-3 w-100">
                <x-nav-link class="text-decoration-none" :href="route('projects')" :active="request()->routeIs('projects')" wire:navigate>
                    {{ __('Projects') }}
                </x-nav-link>
            </div>
            <div class="mb-3 w-100">
                <x-nav-link class="text-decoration-none" :href="route('habits')" :active="request()->routeIs('habits')" wire:navigate>
                    {{ __('Habits') }}
                </x-nav-link>
            </div>
            <div class="mb-3 w-100">
                <x-nav-link class="text-decoration-none" :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                    {{ __('Gallery') }}
                </x-nav-link>
            </div>
            <div class="mb-3 w-100">
                <x-nav-link class="text-decoration-none" :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
                    {{ __('Tasks') }}
                </x-nav-link>
            </div>

            

        </div>
    </div>
</div>
