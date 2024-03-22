<?php
 
use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;

 
new class extends Component {
    public $user;
    public $sex;
    public $details;

    public function mount(){
        $this->user = Auth::user();
        $this->details = $this->user->details;
        $this->sex = $this->details->sex;
    }
 
    public function updateUserDetails()
    {
        $this->details->sex = $this->sex;


        $this->details->save();
    }
}

?>

<section class="w-100">

    <form wire:submit="updateUserDetails" class="space-y-6 w-100">
        <div>
            <x-input-label for="sex" :value="__('sex')" />
            <select name="sex" id="sex" wire:model='sex'>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>


</section>