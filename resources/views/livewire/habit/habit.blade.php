<li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #{{$habit->HEXcolor}}; color: #{{ $habit->isHexColorDark() }}">
    {{ $habit->name }}
    <div class="btn-group" role="group" aria-label="Basic example">
        <input type="checkbox" class="btn-check" id="habit{{$habit->id}}" autocomplete="off" {{ $completed ? 'checked' : '' }} wire:click='toggle()'>
        <label class="btn btn-outline-primary" for="habit{{$habit->id}}"><i class="fa-solid fa-check"></i></label>
        <button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#habitModal" wire:click='updateHabitModal()'><i class="fa-solid fa-cog"></i></button>
        <button type="button" class="btn btn-danger" wire:click='deleteHabit()'><i class="fa-solid fa-trash"></i></button>
    </div>
</li>
