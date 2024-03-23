<div>
    <livewire:tasks.panel />
    <div class="row">
        @foreach ($taskLists as $key => $list)
            <div class="col-3 p-3">
                <livewire:tasks.list.card id="{{ $list->id }}" />
            </div>
        @endforeach
    </div>
</div>