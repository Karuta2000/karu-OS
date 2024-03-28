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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="h-100">
    <livewire:welcome.navigation />

    <div
        style=" width: 100%; height: 100%; position: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url(' {{ asset('images/welcome-bg.gif') }}')">
        <section class="p-5" style="position: fixed; overflow: auto; width: 100%; height: 100%; background: #FFFFFFBB">
                <div class="row">
                    <div class="col-6">


                        <div class="card p-3 mb-3 bg-gradient">
                            <h4 class="p-3">v0.5</h4>

                            <ul>
                                <li>Karu OS Version 0.5 Release Notes</li>
                                <li>Release Date: March 26, 2024</li>
                                <li>Changes and Enhancements:</li>
                                <li>Further Simplification of Sidebar:</li>
                                <li>The sidebar has been made even smaller and simpler, now displaying only icons without accompanying text. This enhances the visual clarity and efficiency of navigation.</li>
                                <li>Gallery Focus:</li>
                                <li>Modal Integration for Images: Users can now interact with images through modal dialogs, enabling actions such as viewing, deleting, or setting images as avatars directly from the gallery.</li>
                                <li>Additional Image Information: Time of image addition and associated projects are now displayed, providing users with more context and organization.</li>
                                <li>Sorting Options: Users can now sort images by newest or oldest, facilitating easier navigation and management.</li>
                                <li>Toaster Notifications: Toasters have been implemented to display notifications, enhancing user feedback and interaction within the gallery.</li>
                                <li>Task Updates:</li>
                                <li>Modal Task Updates: Tasks can now be updated via modal dialogs, improving task management efficiency and user experience.</li>
                                <li>Introduction of Colors:</li>
                                <li>Color Features: Users can now add and display colors within the system. While the functionality is currently limited, more features related to colors are planned for future updates.</li>
                                <li>Welcome Page Changelog:</li>
                                <li>The welcome page now includes a changelog, providing users with immediate access to information about recent updates and changes to the platform.</li>
                            </ul>
                        </div>

                        <div class="card p-3 mb-3 bg-gradient">
                            <h4 class="p-3">v0.4</h4>

                            <ul>
                                <li>Karu OS Version 0.4 Release Notes</li>
                                <li>Release Date: March 23, 2024</li>
                                <li>Improved Sidebar:</li>
                                <li>The sidebar has undergone enhancements, providing a more polished and efficient
                                    navigation experience.</li>
                                <li>Modal Integration for Adding Items:</li>
                                <li>Users can now add habits, tasks, images, and projects via modal dialogs,
                                    streamlining
                                    the process and enhancing user interaction.</li>
                                <li>File Structure Optimization:</li>
                                <li>The file structure has been optimized, resulting in improved organization and
                                    efficiency. Redundant or outdated files have been removed, ensuring a cleaner
                                    system.
                                </li>
                                <li>Revamped Settings:</li>
                                <li>Expanded Settings Sections: Settings have been revamped and divided into five
                                    distinct
                                    parts, enhancing user control and customization.</li>
                                <li>Additional User Details: Users can now input additional details such as birthday,
                                    sex,
                                    and bio, enriching their profile information.</li>
                                <li>Profile Integration: New user details are seamlessly integrated into user profiles,
                                    providing a more comprehensive user experience.</li>
                                <li>Design Adjustments:</li>
                                <li>Further adjustments have been made to the design, refining the visual aesthetics and
                                    usability of the platform.</li>
                                <li>Welcome Page Update:</li>
                                <li>The welcome page has been updated, offering a refreshed introduction to the platform
                                    and
                                    its features.</li>
                            </ul>


                        </div>


                        <div class="card p-3 mb-3">
                            <h4 class="p-3">v0.3</h4>

                            <ul>
                                <li>Karu OS Version 0.3 Release Notes</li>
                                <li>Release Date: March 22, 2024</li>
                                <li>Changes and Additions:</li>
                                <li>User Interface Revamp:</li>
                                <li>Navbar Removal: The navbar has been replaced with a sidebar, offering a more
                                    intuitive
                                    navigation experience.</li>
                                <li>Introduction of Projects:</li>
                                <li>Project Management: Users can now create and manage projects within Karu OS.</li>
                                <li>Integration with Other Features: Projects can be connected with images, tasks, and
                                    habits, fostering better organization and collaboration.</li>
                                <li>Page Updates:</li>
                                <li>Dashboard: The dashboard has been streamlined to exclusively display a list of
                                    projects,
                                    setting the stage for improved project management.</li>
                                <li>Habits Page: Enhancements have been made to the habits page, ensuring smoother
                                    interaction and tracking of habits.</li>
                                <li>
                                    Tasks Page: Tasks are now organized into task lists for each project, facilitating
                                    more
                                    efficient task management within the context of specific projects.</li>
                            </ul>







                        </div>


                        <div class="card p-3 mb-3">
                            <h4 class="p-3">v0.2</h4>

                            <ul>
                                <li>Karu OS Version 0.2 Release Notes</li>
                                <li>Release Date: March 10, 2024</li>
                                <li>Features Added:</li>
                                <li>Gallery: Now you can i your images. But only by url for now.</li>
                                <li>Tasks: You can also add tasks, through they can only be completed</li>
                                <li>Design improvements: Design was little bit improved but only some details</li>
                            </ul>


                        </div>


                        <div class="card p-3">
                            <h4 class="p-3">v0.1</h4>

                            <ul>
                                <li>Karu OS Version 0.1 Release Notes</li>
                                <li>Release Date: March 9, 2024</li>
                                <li>Features Added:</li>
                                <li>User: Introducing users. You can also have avatar.</li>
                                <li>Habits Tracker: Very simple habits with only functions to create, delete and
                                    complete
                                    them. You can also have many colors.</li>
                                <li>Dashboard: There is not much, only habits you already did</li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

</body>

</html>
