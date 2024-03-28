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
                    
                    
                    <div class="card p-3 mb-3 bg-gradient">
                        <h4 class="p-3">v0.6</h4>

                        <ul>
                            <li>
                                Karu OS Version 0.6 Release Notes</li>
                                <li>Release Date: March 28, 2024</li>
                                <li>Task Management Overhaul:</li>
                                <li>Introduction of Task Boards:</li>
                                <li>Task lists have been replaced with customizable task boards, offering users greater flexibility and organization in managing tasks. These boards are independent of projects and can be tailored to suit individual needs.</li>
                                <li>Each task board can be personalized with a distinct color and title, enhancing visual organization and clarity.</li>
                                <li>Enhanced Task Features:</li>
                                <li>Additional Task Attributes: Tasks now include due dates, priorities, and statuses.</li>
                                <li>Expanded Status Options: Tasks can now be classified into four statuses: not started, in progress, completed, and cancelled, providing users with more comprehensive tracking capabilities.</li>
                                <li>Gallery Improvements:</li>
                                <li>Dropdown Form Integration:</li>
                                <li>The gallery interface has been updated to feature a dropdown form instead of modal dialogs, improving accessibility and user interaction.</li>
                                <li>View Count Display:</li>
                                <li>Each image now includes the number of views it has received, allowing users to gauge image popularity and engagement.</li>
                                <li>Setting Page Enhancements:</li>
                                <li>Design Improvements:</li>
                                <li>The settings page has been refined and enhanced for improved usability and aesthetics.</li>
                                <li>General Updates:</li>
                                <li>Overall Design Adjustments:</li>
                                <li>Various design adjustments have been made throughout the platform to enhance user experience and visual coherence.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
        </section>
        
    </div>
    
</body>

</html>
