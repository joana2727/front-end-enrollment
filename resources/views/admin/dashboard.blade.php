@extends('layouts.admin.navbar')

@section('content')
<!-- Dashboard Stats -->
<div
    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8 p-5 bg-light rounded-2xl shadow-big w-[100%] mx-auto mt-5">
    <!-- Card 1 -->
    <div class="bg-yellow shadow-small rounded-lg p-6 max-w-full flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Total Number of Users</h3>
            <p class="text-4xl text-dark font-bold">55</p>
        </div>
        <img src="{{ asset('assets/users-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
    </div>

    <!-- Card 2 -->
    <div class="bg-lime-green shadow-small rounded-lg p-6 max-w-full flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Number of Registrar Users</h3>
            <p class="text-4xl text-dark font-bold">30</p>
        </div>
        <img src="{{ asset('assets/user-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
    </div>

    <!-- Card 3-->
    <div class="bg-lime-green shadow-small rounded-lg p-6 max-w-full flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Number of Department Users</h3>
            <p class="text-4xl text-dark font-bold">25</p>
        </div>
        <img src="{{ asset('assets/user-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
    </div>
</div>

<!-- Table Section -->
<div class="p-5 bg-light rounded-2xl shadow-big w-full mx-auto mb-8">

    <!-- Title and View All Button -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="font-table-header text-xl">Recently Added Users</h2>
        <button class="text-sm text-primary font-semibold border border-primary px-4 py-2 rounded-lg hover:bg-primary hover:text-white">View All</button>
    </div>

    <!-- Table Container with limited width to the screen -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Username</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Role</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Date Registered</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-600">1</td>
                    <td class="px-6 py-4 text-sm text-gray-600">johndoe</td>
                    <td class="px-6 py-4 text-sm text-gray-600">johndoe@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600">2022-01-01</td>
                </tr>
                <!-- Repeat rows for other data -->
            </tbody>
        </table>
    </div>
</div>





@endsection