<div>
    <div class="card mb-3 bg-dark shadow-sm">
        <div class="card-body p-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button class="btn btn-light" wire:click="$dispatch('showModal', {data: {'alias' : 'habits.habit-list.modal' }})"><i class="fa-solid fa-plus"></i></button>
                <select class="form-select btn btn-light pe-5" wire:model='mode'>
                    <option selected value="complete">Complete</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
        </div>
    </div>



    
    <div>
        <div class="row justify-content-left">
            @foreach ($habits as $habit)
                <div class="col-md-2 mb-5">
                    <div class="card clickable-card"
                        style="background-color: #{{ $habit->HEXcolor }}99; color: #{{ $habit->isHexColorDark() }}; opacity: {{ $habit->todayCompleted == '[]' ? 1 : 0.5 }}; cursor: pointer; height: 200px; width: 200px;"
                        wire:click='doAction({{ $habit->id }})'>
                        <div class="card-body d-flex justify-content-center align-items-center">
                            
                            <p>{{ $habit->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>






</div>





</div>
