<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>{{ $title ?? 'Default Title' }}</title>
    <link rel="icon" href="{{ asset($favicon ?? 'assets/cvsu.svg') }}" type="image/svg+xml">
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

                <!-- Navbar Links with Icons -->
                  <!-- Navbar Links -->
        <ul class="w-full">
            <!-- Dashboard -->
            <a href="{{ route('registar.dashboard') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/dashboard.svg') }}" alt="Dashboard Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Dashboard</span>
                </li>
            </a>
            <!-- Students -->
            <a href="{{ route('registar.students') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/users.svg') }}" alt="Students Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Students</span>
                </li>
            </a>
            <!-- Issue COR -->
            <a href="{{ route('registar.issue-cor') }}">
                <li class="flex items-center w-full px-4 py-3 hover:bg-green-500 transition duration-200 ease-in-out">
                    <img src="{{ asset('assets/file-blank.svg') }}" alt="Issue COR Icon" class="h-icon w-icon mr-4">
                    <span class="text-sm font-semibold font-poppins">Issue COR</span>
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
    <header class="bg-light-gray shadow-big p-4 flex items-center justify-between">
    <!-- Greeting -->
    <h1 class="text-lg font-semibold text-primary ">Good day,  <span id="username">Registrar</span>!</h1>

    <!-- Dropdown Menu -->
    <div class="relative inline-block">
        <!-- Dropdown Trigger -->
        <button 
    id="dropdownButton" 
    class="flex items-center bg-light-gray text-black border-2 border-black px-2 py-1 rounded-xl text-sm hover:bg-gray-300">
    <span class="mr-1 text-black font-medium text-sm">Linus Aurin</span>
    <i class="material-icons text-black text-base">arrow_drop_down</i>
</button>


        <!-- Dropdown Content -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48" style="z-index: 50; background: white; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.5rem;">
    <a href="" class="block px-4 py-2 hover:bg-gray-200">
        Edit User
    </a>
</div>

    </div>
</header>


    <!-- Main Content -->
    <main class="p-6">
        @yield('content')
    </main>
</div>


    <!-- Logout Modal -->
    <div id="logoutModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
            <p class="text-gray-800 font-semibold mb-4">Are you sure you want to logout?</p>
            <div class="flex justify-center space-x-4">
                <button onclick="confirmLogout()" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-600">Yes</button>
                <button onclick="closeModal()" class="bg-red text-white px-4 py-2 rounded-lg hover:bg-gray-400">No</button>
            </div>
        </div>
    </div>

    <!-- Inline Script -->
    <script>
        // Open logout modal
        function openLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');
        }

        // Close modal
        function closeModal() {
            document.getElementById('logoutModal').classList.add('hidden');
        }

        // Confirm logout action
        function confirmLogout() {
            // Perform logout actions here
            console.log("User confirmed logout");
            closeModal(); // Close modal after logout confirmation
            // Redirect to logout route
            window.location.href = "{{ route('logout') }}";
        }
    </script>
</body>

</html>