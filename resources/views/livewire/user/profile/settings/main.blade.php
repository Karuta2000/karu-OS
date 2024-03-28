<div class="m-4">
    

    <livewire:user.profile.settings.navigation />

    
    @if ($page == "profile_settings")
    <livewire:user.profile.settings.sections.profile-information />
    @endif
    @if ($page == "profile_details")
        <livewire:user.profile.settings.sections.profile-details />
    @endif
    @if ($page == "avatar_banner")
    <livewire:user.profile.settings.sections.avatar-banner />
    @endif
    @if ($page == "password")
    <livewire:user.profile.settings.update-password-form />
    @endif
    @if ($page == "delete_profile")
    <livewire:user.profile.settings.delete-user-form />
    @endif

    
    
</div>