@extends('layouts.admin.navbar')

@section('content')


<!-- Filter Buttons and Search Bar -->
<div class="flex justify-between items-center mb-4 pt-4">

    <!-- Buttons Section -->
    <div class="flex space-x-2">
        <button
            class="text-sm text-dark bg-yellow font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">All</button>
        <button
            class="text-sm  text-dark bg-lime-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Registrar</button>
        <button
            class="text-sm text-dark bg-moss-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Department</button>
    </div>

    <!-- Search Bar Section -->
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <img src="{{ asset('assets/search-icon.svg') }}" alt="Search Icon"
                class="h-6 w-6 group-hover:scale-110 transition-transform duration-200 ease-in-out">
            <span
                class="ml-2 text-xs text-gray-600 font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out"></span>
        </div>
        <input type="text"
            class="text-sm border-hidden px-4 py-2 rounded-lg focus:outline-none focus:ring-0 focus:ring-light focus:border-transparent pl-12 shadow-lg"
            placeholder="Search users..." />
    </div>

</div>


<!-- Table Section -->
<div class="p-5 bg-light rounded-2xl shadow-big w-full mx-auto mb-8">

    <!-- Title and View All Button -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="font-table-header text-xl text-primary">Users</h2>
        <div class="flex space-x-2">
            <button
                class="text-sm text-light bg-gray font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Export
                as Excel</button>
            <button
                class="text-sm text-light bg-primary font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">
                <img src="{{ asset('assets/plus.svg') }}" alt="Plus Icon" class="h-5 w-5 inline-block mr-2">
                Add New Users
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
                <tr class="bg-light-gray">
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">User Id</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">User Type</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">202401</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Joana Garcia</td>
                    <td class="px-6 py-4 text-sm text-gray-600">joana272@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Admin</td>
                    <td class="px-6 py-4 text-sm text-gray-600 text-center">
                        <div class="flex justify-center space-x-4">
                            <!-- View Icon -->
                            <a href="#" class="text-lime-green  hover:text-blue-500">
                                <span class="material-icons text-lg">visibility</span>
                            </a>
                            <!-- Edit Icon -->
                            <a href="#" class="text-lime-green hover:text-green-500">
                                <span class="material-icons text-lg">edit</span>
                            </a>
                            <!-- Delete Icon -->
                            <a href="#" class="text-lime-green hover:text-red-500">
                                <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination Section -->
        <div class="flex items-center justify-center space-x-6 mt-4">
            <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">Previous</button>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">1</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">2</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">3</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">4</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">5</span>
            <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-primary hover:text-light">Next</button>
        </div>
    </div>

    @endsection