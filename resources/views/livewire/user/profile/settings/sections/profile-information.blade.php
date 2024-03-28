<?php

use App\Models\User;
use Masmerise\Toaster\Toaster;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use function Livewire\Volt\state;

use Livewire\Volt\Component;


new class extends Component{
    public $name;
    public $email;

    public function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function updateProfileInformation(){
        $user = Auth::user();
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ]);
        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);

        Toaster::success('Profile information updated!');

    }

    public function sendVerification(){
        $user = Auth::user();
        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: RouteServiceProvider::HOME);
            return;
        }
        $user->sendEmailVerificationNotification();
        Session::flash('status', 'verification-link-sent');
    }

}



?>

<div class="card my-3 shadow-sm w-100">
    <div class="card-header h5 bg-dark text-light">
        Profile Information
    </div>
    <div class="card-body bg-gradient">
        <section class="w-100">

                <div class="mb-3 row">
                    <label for="name" class="col-form-label col-1">Name</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="name" wire:model='name'>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-form-label col-1">Email</label>
                    <div class="col-11">
                        <input type="email" class="form-control" id="email" wire:model='email'>
                    </div>
                </div>
            
                <div class="d-flex mt-5">
                    <button class="btn btn-dark px-3" wire:click='updateUserDetails'>Save</button>
                </div>

        
        
        </section>
    </div>
    
</div>

