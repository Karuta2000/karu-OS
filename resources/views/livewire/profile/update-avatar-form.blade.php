<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use function Livewire\Volt\state;

state([
    'avatar' => fn () => auth()->user()->avatar,
    'cover' => fn () => auth()->user()->cover,
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


?>

<section class="w-100">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's avatar.") }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="space-y-6 w-100">       
        <div class="row">
            <div class="col-6">
                <img class="w-75 mx-auto rounded-full" src="{{ $avatar }}" alt="{{ auth()->user()->name }}">
            </div>
            <div class="col-6">
                <img class="w-100 mx-auto" src="{{ $cover }}" alt="{{ auth()->user()->name }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <x-input-label for="avatar" :value="__('Avatar')" />
                <x-text-input wire:model="avatar" id="avatar" name="avatar" type="text" class="mt-1 block w-full" required autofocus autocomplete="avatar" />
                <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
            </div>
            <div class="col-6">
                <x-input-label for="cover" :value="__('Cover')" />
                <x-text-input wire:model="cover" id="cover" name="cover" type="text" class="mt-1 block w-full" required autofocus autocomplete="cover" />
                <x-input-error class="mt-2" :messages="$errors->get('cover')" />
            </div>
        </div>

        
       
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
    
</section>
