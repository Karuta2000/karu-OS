<div>



    <div class="card mb-4 shadow-sm">

        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#habitModal"
                wire:click='dispatch(`resetModal`)'><i class="fa-solid fa-plus"></i></button>
            <input type="checkbox" class="btn-check" id="hideCompletedHabits" autocomplete="off"
                wire:click='setMode("complete")'>
            <label class="btn btn-outline-primary" for="hideCompletedHabits"><i
                    class="fa-solid fa-check"></i></label>
        </div>
    </div>



    @livewire('habit-modal')

    <div class="row justify-content-left container-fluid">
        @foreach ($habits as $habit)
            <div class="col-2 p-3">
                <div class="card p-3"
                    style="background-color: #{{ $habit->HEXcolor }}99; color: #{{ $habit->isHexColorDark() }}; opacity: {{ $habit->todayCompleted == "[]" ? 1 : 0.5 }}; cursor: pointer" wire:click='doAction({{ $habit->id }})'>
                    {{ $habit->name }}
                </div>

            </div>
        @endforeach
    </div>




</div>
