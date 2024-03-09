<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile settings') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="">
            <div class="card p-4 my-3">
                <div class="w-100">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="card p-4 my-3">
                <div class="w-100">
                    <livewire:profile.update-avatar-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>