<x-app-layout>
    <div class="m-4">


        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Profile Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Avatar and banner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>



        <div class="py-3">

            <div class="card my-3 shadow-sm w-100">
                <div class="card-header">
                    Profile information
                </div>
                <div class="card-body">
                    <livewire:profile.update-profile-information-form />
                </div>
                
            </div>
    
            <div class="card my-3 shadow-sm">
                <div class="card-header">
                    Avatar and banner
                </div>
                <div class="card-body">
                    <livewire:profile.update-avatar-form />
                </div>
            </div>
    
            <div class="card my-3 shadow-sm w-100">
                <div class="card-header">
                    Profile information
                </div>
                <div class="card-body">
                    <livewire:profile.update-user-details-form />
                </div>
                
            </div>
    
            <div class="card my-3 shadow-sm">
                <div class="card-header">
                    Password
                </div>
                <div class="card-body">
                    <livewire:profile.update-password-form />
                </div>
            </div>
    
            <div class="card my-3 shadow-sm">
                <div class="card-header">
                    Delete user
                </div>
                <div class="card-body">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
