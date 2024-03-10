<x-app-layout>
    <div class="row m-0 h-100">
        <div class="col-4 d-flex flex-column p-0">
            <div class="bg-white p-7 justify-content-center text-center shadow-sm flex-grow-1">
                <img class="w-50 rounded-full mb-3 mx-auto" src="{{ Auth::user()->avatar }}" alt="{{ auth()->user()->name }}">
                <span class="h2 mx-auto mt-5">Welcome, {{ Auth()->user()->name }}</span>
                <hr>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Total tasks: {{ Auth::user()->tasks->count() }}</li>
                    <li class="list-group-item">Total habits: {{ Auth::user()->habits->count() }}</li>
                </ul>
            </div>
        </div>
        <div class="col-8 p-3">
            <livewire-project.project-list />
        </div>

    </div>

</x-app-layout>
