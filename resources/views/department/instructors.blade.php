@extends('layouts.department.navbar')

@section('content')


<!-- Filter Buttons and Search Bar Section -->
<div class="flex justify-between items-center mb-4">

    <!-- Buttons -->
    <div class="flex space-x-2">
        <button
            class="text-sm text-dark bg-yellow font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">All</button>
        <button
            class="text-sm  text-dark bg-lime-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">IT
            Instructors</button>
        <button
            class="text-sm text-dark bg-moss-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">CS
            Instructors</button>
    </div>

    <!-- Search Bar -->
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
        <h2 class="font-header text-xl color-primary">Instructors List</h2>
        <div class="flex space-x-2">
            <button
                class="text-sm text-light bg-primary font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Export
                as Excel</button>
                <button onclick="openModal()" class="bg-primary text-white px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/plus.svg') }}" alt="Plus Icon" class="h-5 w-5 inline-block mr-2">
                Add Insructor</button>

        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
                <tr class="bg-light-gray">
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Instructor Id</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Department</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 border-b border-border-color">
                    <td class="px-6 py-4 text-sm text-gray-600">01</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Edhan Belgica</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Computer Science</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">02</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Benedick Sarmiento</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Computer Science</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">03</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Clarissa Rostrollo</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">04</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Aida Penson</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">05</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Pamela Tagum</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">06</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Stephen Bacolor</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">07</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jessica Ann Sambrano</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Computer Science</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">08</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Rufino Della Cruz</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Computer Science</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">09</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Redem Decipulo</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">010</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jerico Castillo</td>
                    <td class="px-6 py-4 text-sm text-gray-600">example@example.com</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Information Technology</td>
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

    <!-- Modal Section -->
<div id="addInstructorModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-10 rounded-lg shadow-lg w-1/2">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-semibold text-primary text-left">Add Instructor</h2>
            <button type="button" onclick="closeModal()" class="text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Form -->
        <form>
            <!-- Grid Layout -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Instructor ID -->
                <div>
                    <label for="instructorID" class="block text-sm font-medium text-dark mb-2">Instructor ID</label>
                    <input id="instructorID" type="text" placeholder="Insert Instructor ID"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-dark mb-2">Name</label>
                    <input id="name" type="text" placeholder="Insert Full Name"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Email Address -->
                <div class="col-span-2">
                    <label for="email" class="block text-sm font-medium text-dark mb-2">Email Address</label>
                    <input id="email" type="email" placeholder="Insert Full Email Address"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Mobile Number -->
                <div>
                    <label for="mobile" class="block text-sm font-medium text-dark mb-2">Mobile Number</label>
                    <input id="mobile" type="text" placeholder="Insert Mobile Number"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Role -->
                <div>
                    <label for="role" class="block text-sm font-medium text-dark mb-2">Role</label>
                    <select id="role"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Select Role</option>
                        <option value="Instructor">Instructor</option>
                        <option value="Assistant">Assistant</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <!-- Address -->
                <div class="col-span-2">
                    <label for="address" class="block text-sm font-medium text-dark mb-2">Address</label>
                    <textarea id="address" placeholder="Address..."
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
            </div>

            <div id="successModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
                    <p class="text-gray-800 font-semibold mb-4">Instructor Successfully Added</p>
                    <button onclick="closeModal()" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-600">OK</button>
                </div>
            </div>


                        <div class="flex justify-end space-x-4 mt-8">
                        <button type="button" onclick="clearAllInputs()"
                    class="bg-red text-white px-10 h-8 rounded-lg hover:bg-red-600">Clear All</button>
                    <button type="submit" onclick="showModal()" class="bg-primary text-white px-10 h-8 rounded-lg hover:bg-blue-600">Create</button>             
                    </div>
                </form>
            </div>
        </div>

            <script>

function clearAllInputs() {
        // Select the form element
        const form = document.querySelector("form");

        // Clear all input, select, and textarea elements within the form
        form.querySelectorAll("input, select, textarea").forEach((element) => {
            if (element.type === "checkbox" || element.type === "radio") {
                // Uncheck checkboxes and radio buttons
                element.checked = false;
            } else if (element.type === "file") {
                // Clear file inputs
                element.value = "";
            } else {
                // Clear text, number, email, etc.
                element.value = "";
            }
        });
    }

             // Function to show the modal
    function showModal() {
        const modal = document.getElementById("successModal");
        modal.classList.remove("hidden");
    }

    // Function to hide the modal
    function closeModal() {
        const modal = document.getElementById("successModal");
        modal.classList.add("hidden");
    }

            function openModal() {
                document.getElementById('addInstructorModal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('addInstructorModal').classList.add('hidden');
            }

            function togglePassword() {
        const passwordInput = document.getElementById("password");
        const eyeOpen = document.getElementById("eyeOpen");
        const eyeClosed = document.getElementById("eyeClosed");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeOpen.classList.add("hidden");
            eyeClosed.classList.remove("hidden");
        } else {
            passwordInput.type = "password";
            eyeOpen.classList.remove("hidden");
            eyeClosed.classList.add("hidden");
        }
    }
        </script>


    @endsection