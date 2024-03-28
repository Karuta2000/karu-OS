<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>karu OS</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:scripts />
    <livewire:modals />
    <livewire:styles />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="h-100">
    <livewire:welcome.navigation />

    <div style=" width: 100%; height: 100%; position: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url(' {{ asset('images/welcome-bg.gif') }}')">
        <section class="p-5" style="position: fixed; width: 100%; height: 100%; background: #FFFFFFBB">
            <div class="row">
                <div class="col-4">
                    <div class="card p-3 mb-4">
                        <h1 class="h1">
                            Welcome to karu OS
                        </h1>
                        <hr>
                        <p class="h5">
                            There is not much to do, but soon, there will new features
                        </p>
                        <p class="h5">
                            You can use gallery, tasks, habits and projects for now.
                        </p>
                        <hr>
                        <a href="https://github.com/Karuta2000/karu-OS">
                            <img src="{{ asset('images/github_logo.png') }}" width="40" height="40" alt="">
                        </a>
                    </div>
                    
                    
                    <div class="card p-3">
                        <p class="h4">
                            v0.6
                        </p>
                    </div>
                </div>
            </div>
            
            
        </section>
        
    </div>
    
</body>

</html>
