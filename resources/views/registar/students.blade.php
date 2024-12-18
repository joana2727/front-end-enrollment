@extends('layouts.registrar.navbar')


@section('content')


<!-- Filter Buttons and Search Bar -->
<div class="flex justify-between items-center mb-4 pt-4">
    <!-- Buttons -->
    <div class="flex space-x-2">
        <button
            class="text-sm text-dark bg-yellow font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">All</button>
        <button
            class="text-sm  text-dark bg-lime-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Computer Science</button>
        <button
            class="text-sm text-dark bg-moss-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Information Technology</button>
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

    <!-- Title, Filter Dropdowns, and View All Button -->
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-4">
            <h2 class="font-table-header text-xl font-extrabold">Students</h2>
            <!-- Year Dropdown -->
            <select class="text-sm text-gray-700 bg-white border border-gray-300 rounded-lg w-32 px-4 py-2">
                <option value="">Status</option>
                <option value="1">Regular</option>
                <option value="2">Irregular</option>
                <option value="3">Transferee</option>
                <option value="4">Returnee</option>
            </select>
            <!-- Semester Dropdown -->
            <select class="text-sm text-gray-700 bg-white border border-gray-300 rounded-lg w-40 px-4 py-2">
                <option value="">Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="2">3rd Year</option>
                <option value="2">4th Year</option>
            </select>
        </div>
        <div class="flex space-x-2">
            <button
                class="text-sm text-light bg-gray font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Export
                as Excel</button>
            <button
                class="text-sm text-light bg-primary font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">
                <img src="{{ asset('assets/plus.svg') }}" alt="Plus Icon" class="h-5 w-5 inline-block mr-2">
                Add Course
            </button>
        </div>
    </div>


    <!-- Table  -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
    <thead>
        <tr class="bg-light-gray">
            <th class="px-5 py-3 text-left text-sm font-bold text-gray-600">Student Number</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Name</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Email</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Program</th>
            <th class="px-3 py-3 text-left text-sm font-bold text-gray-600">Year</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Status</th>
            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Student 1 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230001</td>
            <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
            <td class="px-6 py-4 text-sm text-gray-600">johndoe@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSCS</td>
            <td class="px-6 py-4 text-sm text-gray-600">1st Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Regular</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 2 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230002</td>
            <td class="px-6 py-4 text-sm text-gray-600">Jane Smith</td>
            <td class="px-6 py-4 text-sm text-gray-600">janesmith@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSIT</td>
            <td class="px-6 py-4 text-sm text-gray-600">2nd Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Irregular</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 3 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230003</td>
            <td class="px-6 py-4 text-sm text-gray-600">Michael Brown</td>
            <td class="px-6 py-4 text-sm text-gray-600">michaelbrown@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSCS</td>
            <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Transferee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 4 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230004</td>
            <td class="px-6 py-4 text-sm text-gray-600">Emily White</td>
            <td class="px-6 py-4 text-sm text-gray-600">emilywhite@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSIT</td>
            <td class="px-6 py-4 text-sm text-gray-600">4th Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Returnee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
         <!-- Student 1 -->
         <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230001</td>
            <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
            <td class="px-6 py-4 text-sm text-gray-600">johndoe@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSCS</td>
            <td class="px-6 py-4 text-sm text-gray-600">1st Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Regular</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 2 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230002</td>
            <td class="px-6 py-4 text-sm text-gray-600">Jane Smith</td>
            <td class="px-6 py-4 text-sm text-gray-600">janesmith@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSIT</td>
            <td class="px-6 py-4 text-sm text-gray-600">2nd Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Irregular</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 3 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230003</td>
            <td class="px-6 py-4 text-sm text-gray-600">Michael Brown</td>
            <td class="px-6 py-4 text-sm text-gray-600">michaelbrown@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSCS</td>
            <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Transferee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 4 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230004</td>
            <td class="px-6 py-4 text-sm text-gray-600">Emily White</td>
            <td class="px-6 py-4 text-sm text-gray-600">emilywhite@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSIT</td>
            <td class="px-6 py-4 text-sm text-gray-600">4th Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Returnee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
            </tr>
              <!-- Student 3 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230003</td>
            <td class="px-6 py-4 text-sm text-gray-600">Michael Brown</td>
            <td class="px-6 py-4 text-sm text-gray-600">michaelbrown@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSCS</td>
            <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Transferee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
        </tr>
        <!-- Student 4 -->
        <tr class="hover:bg-gray-100 border-b border-border-color">
            <td class="px-6 py-4 text-sm text-gray-600">20230004</td>
            <td class="px-6 py-4 text-sm text-gray-600">Emily White</td>
            <td class="px-6 py-4 text-sm text-gray-600">emilywhite@example.com</td>
            <td class="px-6 py-4 text-sm text-gray-600">BSIT</td>
            <td class="px-6 py-4 text-sm text-gray-600">4th Year</td>
            <td class="px-6 py-4 text-sm text-gray-600">Returnee</td>
            <td class="px-6 py-4 text-sm text-gray-600 text-center">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-lime-green hover:text-blue-500">
                        <span class="material-icons text-lg">visibility</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-green-500">
                        <span class="material-icons text-lg">edit</span>
                    </a>
                    <a href="#" class="text-lime-green hover:text-red-500">
                        <span class="material-icons text-lg">delete</span>
                    </a>
                </div>
            </td>
            </tr>
        <!-- Remaining Students (5-10) -->
        <!-- Add rows with similar pattern as above -->
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