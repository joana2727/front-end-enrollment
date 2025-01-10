@extends('layouts.department.navbar')


@section('content')


<!-- Filter Buttons and Search Bar Section -->
<div class="flex justify-between items-center mb-4">

    <!-- Filter Buttons -->
    <div class="flex space-x-2">
        <button
            class="text-sm text-dark bg-yellow font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">All</button>
        <button
            class="text-sm  text-dark bg-lime-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">IT
            Courses</button>
        <button
            class="text-sm text-dark bg-moss-green font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">CS
            Courses</button>
    </div>

    <!-- Search Bar  -->
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

    <!-- Title, Dropdown Filters, and View All Button -->
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-4">
            <h2 class="font-header text-xl color-primary">Courses</h2>

            <!-- Year Dropdown -->
            <select class="text-sm text-gray bg-white border border-gray-300 rounded-lg w-32 px-4 py-2">
                <option value="">Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>

            <!-- Semester Dropdown -->
            <select class="text-sm text-gray bg-white border border-gray-300 rounded-lg w-40 px-4 py-2">
                <option value="">Semester</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
            </select>
        </div>
        <div class="flex space-x-2">
            <button
                class="text-sm text-light bg-gray font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white">Export
                as Excel</button>
                <button onclick="openModal()" class="bg-primary text-white px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/plus.svg') }}" alt="Plus Icon" class="h-5 w-5 inline-block mr-2">
                Add Course</button>
        </div>

    </div>


    <!-- Courses Table  -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
                <tr class="bg-light-gray">
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Course ID</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Course Description</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Total Credit Units</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Department</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 border-b border-border-color">
                    <td class="px-6 py-4 text-sm text-gray-600">GNED 08</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Understanding the Self</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                            <a href="#" class="text-lime-green hover:text-red-500" onclick="openDeleteModal()">
                            <span class="material-icons text-lg">delete</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-border-color ">
                    <td class="px-6 py-4 text-sm text-gray-600">GNED 14</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Panitikang Panlipunan</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">MATH 2</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Calculus</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">COSC 65</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Architecture and Organization</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">COSC 70</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Software Engineering I</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">DCIT 25</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Data Structures and Algorithms</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">DCIT 55</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Advance Database Management System</td>
                    <td class="px-6 py-4 text-sm text-gray-600">3</td>
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
                    <td class="px-6 py-4 text-sm text-gray-600">FITT 4</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Physical Activities Towards Health and Fitness 2</td>
                    <td class="px-6 py-4 text-sm text-gray-600">2</td>
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
<div id="addCourseModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-10 rounded-lg shadow-lg w-1/2">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-semibold text-primary text-left">Add Course</h2>
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
                <!-- Course Code -->
                <div>
                    <label for="courseCode" class="block text-sm font-medium text-dark mb-2">Course Code</label>
                    <input id="courseCode" type="text" placeholder="Insert Course Code"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Course Title -->
                <div>
                    <label for="courseTitle" class="block text-sm font-medium text-dark mb-2">Course Title</label>
                    <input id="courseTitle" type="text" placeholder="Insert Course Title"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Total Credit Unit -->
                <div>
                    <label for="creditUnit" class="block text-sm font-medium text-dark mb-2">Total Credit Unit</label>
                    <input id="creditUnit" type="text" placeholder="Insert Credit Unit"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <!-- Department -->
                <div>
                    <label for="department" class="block text-sm font-medium text-dark mb-2">Department</label>
                    <select id="department"
                        class="w-full px-3 py-2 bg-gray-200 rounded-lg text-sm border-0 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Select Department</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Engineering">Engineering</option>
                        <!-- Add more departments as needed -->
                    </select>
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


                    <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
                <p class="text-dark font-semibold mb-4">Are you sure you want to remove this course?</p>
                <div class="flex justify-center space-x-4">
                    <button onclick="confirmDelete()" class="bg-red text-white px-4 py-2 rounded-lg hover:bg-red-600">Delete</button>
                    <button onclick="closeModal()" class=" bg-primary text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-400">Cancel</button>
                </div>
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
                document.getElementById('addCourseModal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('addCourseModal').classList.add('hidden');
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

            // Function to open the delete confirmation modal
        function openDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
        }

        // Function to handle delete confirmation
        function confirmDelete() {
            // Add your delete logic here
            alert('Course has been deleted successfully!');
            closeModal();
        }

        </script>

    @endsection