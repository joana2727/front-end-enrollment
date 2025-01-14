@extends('layouts.admin.navbar')

@php
        $title = 'CVSU - Admin Dashboard';
    @endphp

@section('content')

<!-- Student Count Per Status -->
<div class="flex flex-wrap gap-4 mb-5 p-2 bg-light-gray rounded-2xl mx-auto mt-1">

    <!-- Regular -->
    <div class="bg-primary shadow-small rounded-xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg text-white font-semibold">Admin</h3>
            <p class="text-2xl text-white font-bold">7</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-white"></div>
    <!-- Button with arrow icon -->
        <button class="absolute bottom-5 right-4 bg-primary text-white p-1 shadow-md hover:bg-gray-100 transition">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

    <!-- Irregular -->
    <div class="bg-primary shadow-small rounded-xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg text-white font-semibold">Student</h3>
            <p class="text-2xl text-white font-bold ">564</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-white"></div>
     <!-- Button with arrow icon -->
        <button class="absolute bottom-5 right-4 bg-primary text-white p-1 shadow-md hover:bg-gray-100 transition">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

    <!-- Transferee -->
    <div class="bg-primary shadow-small rounded-xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg text-white font-semibold">Department</h3>
            <p class="text-2xl text-white font-bold">89</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-white"></div>
        <!-- Button with arrow icon -->
        <button class="absolute bottom-5 right-4 bg-primary text-white p-1 shadow-md hover:bg-gray-100 transition">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

    <!-- Returnee -->
    <div class="bg-primary shadow-small rounded-xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg text-white font-semibold">Registrar</h3>
            <p class="text-2xl text-white font-bold">3</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-white"></div>
        <!-- Button with arrow icon -->
        <button class="absolute bottom-5 right-4 bg-primary text-white p-1 shadow-md hover:bg-gray-100 transition">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
    </div>

<!-- Table Section -->
<div class="p-5 bg-light rounded-xl shadow-big w-full mx-auto mb-8">

    <!-- Title and View All Button -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="font-header text-xl">Recently Added Users</h2>
        <button class="text-sm text-light bg-primary font-semibold border px-4 py-2 rounded-lg hover:scale-105 transition-transform duration-200 ease-in-out">View All</button>

    </div>

    <!-- Table Container with limited width to the screen -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
            <tr class="bg-primary">
                <th class="px-6 py-3 text-left text-sm font-bold text-white">User Id</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-white">Name</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-white">Email</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-white">User Type</th>
            </tr>
            </thead>
            <tbody>
            <tr class="hover:bg-gray-100 border-b border-border-color ">
                  <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>   
                <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                  <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                  <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                  <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>





@endsection