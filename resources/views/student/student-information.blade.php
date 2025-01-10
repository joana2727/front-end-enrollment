@extends('layouts.student.navbar')

    @php
        $title = 'CVSU - Student Information';
    @endphp

@section('content')

<div class="flex bg-gray-100 p-2 justify-between">
    <!-- Left Div -->
    <div class="bg-white p-6 rounded-2xl shadow-small w-1/4 mr-4" style="height: 32rem;">
        <!-- Left Profile Details -->
        <div class="text-center">
            <!-- Profile Picture -->
            <div class="relative">
                <img id="profilePicture" src="https://via.placeholder.com/150" alt="Profile Picture" class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 object-cover">
                <input type="file" id="fileInput" class="hidden" accept="image/*" onchange="updateProfilePicture(event)">
            </div>
            <!-- Change Button -->
            <button onclick="triggerFileInput()" class="text-sm text-green-500 underline mb-4">Change</button>
            <p id="studentNumberLabel" class="text-gray-600 font-bold mt-4">202211669</p>
            <p id="fullNameLabel" class="text-gray-800 font-semibold mt-2">Linus Dagoy Aurin</p>
        </div>
        <div class="mt-20 text-sm">
            <p class="flex justify-between mb-4">
                <span class="text-gray-600">Course:</span>
                <span class="text-primary font-bold">BSCS</span>
            </p>
            <p class="flex justify-between mb-4">
                <span class="text-gray-600">Section:</span>
                <span class="text-primary font-bold">3-2</span>
            </p>
            <p class="flex justify-between">
                <span class="text-gray-600">Year Level:</span>
                <span class="text-primary font-bold">Third Year</span>
            </p>
        </div>
    </div>


    <!-- Right Divs Container -->
    <div class="flex flex-col flex-1" style="height: 32rem;">
        <div class="bg-white p-3 rounded-2xl shadow-small mb-4">
            <!-- Top right div content -->
            <h2 class="text-l font-bold text-primary">Personal Settings</h2>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-small flex-1" style="overflow-y: hidden;">
            <!-- Bottom right div content -->
            <form id="updateForm">
                <div class="grid grid-cols-2 gap-x-4 gap-y-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input id="firstNameInput" type="text" value="Linus" class="w-full bg-gray-200 border border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Middle L.</label>
                        <input id="middleNameInput" type="text" value="Dagoy" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input id="lastNameInput" type="text" value="Aurin" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Student No.</label>
                        <input id="studentNumberInput" type="text" value="202211669" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" value="aurinlinus@gmail.com" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mobile No.</label>
                        <input type="text" value="09705201284" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Birthday</label>
                        <input type="birth" value="December 26, 2002" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gender</label>
                        <input type="Gender" value="Male" class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>
                    </div>
                    <div class="col-span-2">
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <textarea class="w-full bg-gray-200 border-gray-300 rounded-lg p-2 text-sm mt-1" readonly>Blk 11 Lot 7 Durian St Golden Acres Subdivision Talon Uno Las Pinas City</textarea>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    // Update profile picture
    function updateProfilePicture(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profilePicture').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection
