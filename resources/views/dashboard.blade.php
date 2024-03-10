<?php
use Carbon\Carbon;

?>

<x-app-layout>
    <div class="container py-6">
        <div class="card p-7 justify-content-center shadow-sm">
            <img class="w-50 rounded-full mx-auto" src="{{ Auth::user()->avatar }}" alt="{{ auth()->user()->name }}">
            <span class="h2 mx-auto mt-5">Welcome, {{ Auth()->user()->name }}</span>
            <hr>
            <div class="my-5">
                <h2>Completed habits</h2>
                <ul class="list-group">
                    @foreach (Auth::user()->completedHabits as $habit)
                        <li class="list-group-item d-flex justify-content-between align-items-start"
                            style="background-color: #{{ $habit->habit->HEXcolor }}; color: #{{ $habit->habit->isHexColorDark() }}">
                            {{ $habit->habit->name }}
                            <span class="badge bg-primary rounded-pill">{{ $habit->whenCompleted() }}</span>
                        </li>
                    @endforeach


                </ul>
            </div>

            @livewire('gallery.gallery')
        </div>
    </div>

</x-app-layout>
