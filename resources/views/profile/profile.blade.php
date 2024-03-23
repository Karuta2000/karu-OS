<x-app-layout>
    <div class="profile-banner w-100 " style="background-image: url('{{ Auth::user()->cover }}')">
        <img src="{{ Auth::user()->avatar }}" class="avatar shadow" alt="Avatar">
        
    </div>
    <div class="profile-content bg-light">
        <div class="profile-header d-flex">
            <p class="h1">{{ Auth::user()->name }}</p>
        </div>
        
        <div>
            aaa
        </div>
    </div>
    
    

</x-app-layout>
