<div class="card p-5">

    <div class="row">
        <div class="col-6">
            <label for="hex" class="form-label">Color: </label>
            <input class="form-control" type="color" name="hex" id="hex" wire:model='hex'>

            <button class="btn btn-primary mt-3" wire:click='addColor()'>
                Add color
            </button>
        </div>

    </div>

    <div class="row mt-5">
        @foreach ($colors as $color)
            <div class="col-2">

                <div wire:click="$dispatch('showModal', {data: {'alias' : 'app.settings.modals.color-modal' }})" class="clickable-card w-100 p-5 text-center round shadow" style="background-color: {{ $color->hex }}">
                    {{ $color->hex }}</div>


            </div>
        @endforeach

    </div>



</div>
