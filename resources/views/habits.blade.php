<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Habits') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="container mx-auto">
            <div class="card p-4">
                {{ __("You're logged in!") }}
            </div>
            
        </div>
    </div>
</x-app-layout>

