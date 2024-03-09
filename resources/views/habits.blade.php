<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Habits') }}
        </h2>
    </x-slot>

    <div class="py-6 container">

        <div class="card mb-3">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#habitModal"><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>


        <div class="modal fade" id="habitModal" tabindex="-1" aria-labelledby="habitModal" aria-hidden="true">


            @livewire('habit-modal')
        </div>


        <div class="card p-4">
            @livewire('habit.habit-list')
        </div>
    </div>
</x-app-layout>
