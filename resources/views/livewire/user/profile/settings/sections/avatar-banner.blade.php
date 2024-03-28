<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use Livewire\Volt\Component;

use function Livewire\Volt\state;
use Masmerise\Toaster\Toaster;

state([
    'avatar' => fn() => auth()->user()->avatar,
    'cover' => fn() => auth()->user()->cover,
]);

$updateProfileInformation = function () {
    $user = Auth::user();

    $validated = $this->validate([
        'avatar' => ['string', 'max:300'],
        'cover' => ['string', 'max:300'],
    ]);

    $user->fill($validated);

    $user->save();

    $this->dispatch('profile-updated', name: $user->name);
};

new class extends Component {
    public $avatar;
    public $cover;

    public function mount()
    {
        $this->avatar = Auth::user()->avatar;
        $this->cover = Auth::user()->cover;
    }

    public function updateAvatar()
    {
        $user = Auth::user();
        $user->avatar = $this->avatar;
        $user->save();
    }

    public function updateCover()
    {
        $user = Auth::user();
        $user->cover = $this->cover;
        $user->save();
    }
};

?>

<div class="card my-3 shadow-sm w-100">
    <div class="card-header h5 bg-dark text-light">
        Avatar and banner
    </div>
    <div class="card-body bg-gradient">
        <section class="w-100">
            <div>
                <div class="mb-3 row justify-content-md-center">
                    <div class="col-3">
                        <div class="d-flex">
                            <div
                                style="background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;
                            border-radius: 50%; width: 350px; height: 350px; background-image: url('{{ $avatar }}')">
                            </div>
                        </div>

                    </div>
                    <div class="col-9 align-self-center">
                        <div class="row align-middle">
                            <label for="avatar" class="col-form-label col-1">Avatar</label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="avatar" wire:model='avatar'>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="d-flex mt-5">
                    <button class="btn btn-dark px-3" wire:click='updateAvatar'>Save avatar</button>
                </div>
            </div>

            <hr>

            <div>
                <div class="mb-3 row justify-content-md-center">
                    <div class="col-3">
                        <div class="d-flex">
                            <img src="{{ $cover != '' ? $cover : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg' }}"
                                alt="avatar" class="w-100">
                        </div>

                    </div>
                    <div class="col-9 align-self-center">
                        <div class="row align-middle">
                            <label for="cover" class="col-form-label col-1">Cover</label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="cover" wire:model='cover'>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="d-flex mt-5">
                    <button class="btn btn-dark px-3" wire:click='updateCover'>Save cover</button>
                </div>
            </div>



        </section>
    </div>

</div>
