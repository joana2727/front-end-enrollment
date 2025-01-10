<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-light-gray">
<div class="flex">
        <!-- Navbar -->
        <div class="w-[14rem] h-screen bg-primary text-white fixed flex flex-col items-center justify-between py-6">
    <!-- Upper Part of Navbar -->
    <div class="flex flex-col items-center w-full">
        <!-- Logo -->
        <div class="mb-12 text-center">
            <img src="{{ asset('assets/cvsu.svg') }}" alt="Bacoor Logo" class="h-logo w-logo mx-auto">
            <p class="text-md mt-2 font-semibold font-poppins">Cavite State University Bacoor Campus</p>
        </div>

               <!-- Navbar Links -->
        <ul class="w-full">
            <!-- Dashboard -->
            <a href="{{ route('department.dashboard') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/dashboard.svg') }}" alt="Dashboard Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Dashboard</span>
                </li>
            </a>
            <!-- Instructors -->
            <a href="{{ route('department.instructors') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/users.svg') }}" alt="Instructors Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Instructors</span>
                </li>
            </a>
            <!-- Courses -->
            <a href="{{ route('department.courses') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/bookmark.svg') }}" alt="Courses Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Courses</span>
                </li>
            </a>
            <!-- Logout -->
            <a href="{{ route('logout') }}" onclick="openLogoutModal(event)">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/signout.svg') }}" alt="Signout Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Logout</span>
                </li>
            </a>
        </ul>
    </div>
</div>

       
<!-- Content Area -->
<div class="ml-[14rem] flex-1 bg-light-gray">
    <!-- Header Part -->
    <header class="bg-light-gray shadow-big p-4">
        <h1 class="text-2xl font-bold">Hello [Username]</h1>
    </header>

    <!-- Main Content -->
    <main class="p-6">
        @yield('content')
    </main>
</div>
</div>
</body>

</html>