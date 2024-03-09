<?php
use Carbon\Carbon;

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="card p-7">
            <div class="row">
                <div class="col-6">
                    <h3>Completed habits</h3>
                    <ul class="list-group">
                        @foreach (Auth::user()->completedHabits as $habit)
                            <li class="list-group-item d-flex justify-content-between align-items-start" style="background-color: #{{$habit->habit->HEXcolor}}; color: #{{ $habit->habit->isHexColorDark() }}">
                                {{ $habit->habit->name }} 
                                <span class="badge bg-primary rounded-pill">{{ $habit->whenCompleted() }}</span>
                            </li>
                        @endforeach
                        

                      </ul>
                </div>
                <div class="col-6">
                    <img class="w-100 rounded-full" src="{{ Auth::user()->avatar }}" alt="{{ auth()->user()->name }}">
                </div>
            </div>            
        </div>
    </div>

</x-app-layout>