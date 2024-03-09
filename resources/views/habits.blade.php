<x-app-layout>
    <div class="py-6 container">

        <div class="card mb-3">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#habitModal" wire:click='dispatch(`resetModal`)'><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>


        
    @livewire('habit-modal')

        <div class="card p-4">
            @livewire('habit.habit-list')
        </div>
    </div>
</x-app-layout>
