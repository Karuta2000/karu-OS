<div>



    <div class="card mb-4 shadow-sm">

        <div class="card-body">



            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#habitModal"
                    wire:click='dispatch(`resetModal`)'><i class="fa-solid fa-plus"></i></button>

                <select class="form-select" aria-label="Default select example" wire:model='mode'>
                    <option selected value="complete">Complete</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="name" class=" col-form-label col-2">Name: </label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="name" wire:model='name'>
                        </div>
        
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="mb-3 row">
                        <label for="name" class=" col-form-label col-2">Color</label>
                        <div class="col-10">
                            <input type="color" class="form-control" max="6" min="6" id="color"
                                wire:model='color'>
                        </div>
        
                        @error('color')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary" wire:click='addHabit()' data-bs-dismiss="modal">Save
                    changes</button>
            </div>

        </div>
    </div>



    @livewire('habit-modal')

    <div class="container-fluid">
        <div class="row justify-content-left">
            @foreach ($habits as $habit)
                <div class="col-md-2 mb-5">
                    <div class="card"
                        style="background-color: #{{ $habit->HEXcolor }}99; color: #{{ $habit->isHexColorDark() }}; opacity: {{ $habit->todayCompleted == '[]' ? 1 : 0.5 }}; cursor: pointer; height: 200px; width: 200px;"
                        wire:click='doAction({{ $habit->id }})'>
                        <div class="card-body d-flex justify-content-center align-items-center">
                            {{ $habit->name }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>






</div>





</div>
