<li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $habit->name }}
    <div class="btn-group" role="group" aria-label="Basic example">
        <input type="checkbox" class="btn-check" id="habit{{$habit->id}}" autocomplete="off" {{ $completed ? 'checked' : '' }} wire:click='toggle()'>
        <label class="btn btn-outline-primary" for="habit{{$habit->id}}">Completed</label>

        <button type="button" class="btn btn-danger" wire:click='deleteHabit()'>delete</button>
    </div>
</li>
