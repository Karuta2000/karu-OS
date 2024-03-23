<?php
 
use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;

 
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
    }
}

?>

<div class="card my-3 shadow-sm w-100">
    <div class="card-header">
        Profile Details
    </div>
    <div class="card-body">
        <section class="w-100">
            <form wire:submit="updateUserDetails" class="space-y-6 w-100">
                <div>
                    <label for="sex" class="form-label">Sex</label>
                    <select class="form-control"  name="sex" id="sex" wire:model='sex'>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" wire:model='bio'>{{ $bio }}</textarea>
                </div>
                <div>
                    <label for="sex" class="form-label">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="form-control" wire:model='birthday'>
                </div>
        
        
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </form>
        
        
        </section>
    </div>
    
</div>

