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
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="h-100">
    <livewire:welcome.navigation />

    <div style=" width: 100%; height: 100%; position: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url(' {{ asset('images/welcome-background.jpg') }}')">
        <section class="p-5" style="position: fixed; width: 100%; height: 100%; background: #FFFFFFBB">
            <div class="row">
                <div class="col-6">       
                    
                    <div class="card p-3">
                        <h4 class="p-3">v0.2</h4>
                       
                        <ul>
                            <li>Karu OS Version 0.2 Release Notes</li>
                            <li>Release Date: March 10, 2024</li>
                            <li>Features Added:</li>
                            <li>Gallery: Now you can i your images. But only by url for now.</li>
                            <li>Tasks: You can also add tasks, through they can only be completed</li>
                            <li>Design improvements: Design was little bit improved but only some details</li>
                            <li>Design improvements: Design was little bit improved but only some details</li>
                        </ul>


                    </div>


                    <div class="card mt-5 p-3">
                        <h4 class="p-3">v0.1</h4>
                       
                        <ul>
                            <li>Karu OS Version 0.1 Release Notes</li>
                            <li>Release Date: March 9, 2024</li>
                            <li>Features Added:</li>
                            <li>User: Introducing users. You can also have avatar.</li>
                            <li>Habits Tracker: Very simple habits with only functions to create, delete and complete them. You can also have many colors.</li>
                            <li>Dashboard: There is not much, only habits you already did</li>
                        </ul>


                    </div>
                </div>
            </div>
            
            
        </section>
        
    </div>
    
</body>

</html>
