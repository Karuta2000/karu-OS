<div>

    <div class="container">

        <div class="card mb-4 shadow-sm">

            <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#habitModal"
                    wire:click='dispatch(`resetModal`)'><i class="fa-solid fa-plus"></i></button>
                <input type="checkbox" class="btn-check" id="hideCompletedHabits" autocomplete="off"  wire:click='toggleCompleted()'>
                <label class="btn btn-outline-primary"  {{ $displayCompleted ? "checked" : "" }} for="hideCompletedHabits"><i
                        class="fa-solid fa-check"></i></label>
            </div>
        </div>



        @livewire('habit-modal')

        <div class="card shadow-sm">
            <div class="card-header">
                Habits
            </div>
            <div class="card-body mx-2">
                <ul class="list-group list-group-flush">
                    @foreach ($habits as $habit)
                        @livewire('habit.habit', ['habitId' => $habit->id], key($habit->id))
                    @endforeach
    
                </ul>
            </div>

            
        </div>
    </div>



</div>
