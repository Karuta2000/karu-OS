<div>
    <div class="profile-banner w-100 " style="background-image: url('{{ Auth::user()->cover }}')">
        <img src="{{ Auth::user()->avatar }}" class="avatar shadow" alt="Avatar">
        
    </div>
    <div class="profile-content bg-light">
        <div class="profile-header">
            <p class="h1">{{ Auth::user()->name }}</p>
        </div>
        
        <div>
            aaa
        </div>
        <div class="m-4 text-left">
            <div class="row">
                <div class="col-4">
                    <div class="card p-0">
                        <h5 class="p-4">User Details: </h5>
                        <ul class="list-group">

                            <li class="list-group-item">
                                Sex: {{ $details->sex }}
                            </li>
                            <li class="list-group-item">
                                Birthday: {{ $details->birthday }}
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-4">
                        <h5>Bio: </h5>
                        <p>
                            {{ $details->bio }}
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
