<?php
 
use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;
use Masmerise\Toaster\Toaster;

 
new class extends Component {
    public $user;
    public $sex;
    public $bio;
    public $birthday;
    public $details;
    public function mount(){
        $this->user = Auth::user();
        $this->details = $this->user->details;
        $this->birthday = $this->details->birthday;
        $this->bio = $this->details->bio;
        $this->sex = $this->details->sex;
    }
    public function updateUserDetails()
    {
        $this->details->sex = $this->sex;
        $this->details->birthday = $this->birthday;
        $this->details->bio = $this->bio;

        $this->details->save();
        Toaster::success('Details updated!');
    }
}

?>

<div class="card my-3 shadow-sm w-100">
    <div class="card-header h5 bg-dark text-light">
        Profile Details
    </div>
    <div class="card-body bg-gradient">
        <section class="w-100">

                <div class="mb-3 row">
                    <label for="sex" class="col-form-label col-1">Sex</label>
                    <div class="col-11">
                        <select class="form-control"  name="sex" id="sex" wire:model='sex'>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bio" class="col-form-label col-1">Bio</label>
                    <div class="col-11">
                        <textarea class="form-control" id="bio" wire:model='bio'>{{ $bio }}</textarea>
                    </div>
                    
                </div>
                <div class="mb-3 row">
                    <label for="birthday" class="col-form-label col-1">Birthday</label>
                    <div class="col-11">
                        <input type="date" name="birthday" id="birthday" class="form-control" wire:model='birthday'>
                    </div>
                </div>
        
            
                <div class="d-flex mt-5">
                    <button class="btn btn-dark" wire:click='updateUserDetails'>Save</button>
                </div>

        
        
        </section>
    </div>
    
</div>

