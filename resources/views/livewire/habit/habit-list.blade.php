<div>
    <ul class="list-group">
        @foreach ($habits as $habit)
            @livewire('habit.habit', ['habitId' => $habit->id], key($habit->id))
        @endforeach
    </ul>
</div>
