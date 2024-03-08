<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Habits') }}
        </h2>
    </x-slot>

    <div class="py-6 container">

        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#habitModal"><i class="fa-solid fa-plus"></i></button>

        <div class="modal fade" id="habitModal" tabindex="-1" aria-labelledby="habitModal" aria-hidden="true">
            <div class="modal-dialog">
                @livewire('habit-modal')
            </div>
        </div>


        <div class="card p-4">
            @livewire('habit.habit-list')
        </div>
    </div>
</x-app-layout>
