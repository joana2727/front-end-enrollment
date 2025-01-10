@extends('layouts.student.navbar')

@php
    $title = 'CVSU - Student Status';
@endphp

@section('content')

<div class="container mx-auto p-6 bg-light shadow-lg rounded-lg">
  <!-- Buttons at the top -->
  <div class="flex justify-end mb-4 gap-4">
    <button class="bg-green-500 text-white py-2 px-6 rounded-lg hover:bg-green-600 focus:outline-none">Enroll Now</button>
    <button id="downloadPdfBtn" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 focus:outline-none">Download PDF</button>
  </div>

  <div id="registrationForm" class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto">

    <!-- Registration Form content here, as in your example -->
    <div class="flex items-center justify-between mb-6">
        <div class="text-center flex-1">
          <h1 class="text-2xl font-bold text-green-700">CAVITE STATE UNIVERSITY</h1>
          <p class="text-lg text-gray-600">Bacoor City Campus</p>
          <p class="text-lg font-bold text-green-700">REGISTRATION FORM</p>
        </div>
      </div>

 <!-- Student Details -->
<div class="grid grid-cols-3 mb-4 bg-white p-4 rounded-md">
<div>
    <p class="font-semibold text-green-700">
        Student Number: <span class="text-black font-semibold">{{ session('studentDetails.studentNumber', '[Student Number]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Name: <span class="text-black font-semibold">{{ session('studentDetails.studentName', '[Name]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Semester: <span class="text-black font-semibold">{{ session('studentDetails.semester', '[Semester]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Course: <span class="text-black font-semibold">{{ session('studentDetails.course', '[Course]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Year: <span class="text-black font-semibold">{{ session('studentDetails.year', '[Year]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        School Year: <span class="text-black font-semibold">{{ session('studentDetails.schoolYear', '[School Year]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Encoder: <span class="text-black font-semibold">{{ session('studentDetails.encoder', '[Encoder]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Address: <span class="text-black font-semibold">{{ session('studentDetails.address', '[Address]') }}</span>
    </p>
</div>
<div>
    <p class="font-semibold text-green-700">
        Section: <span class="text-black font-semibold">{{ session('studentDetails.section', '[Section]') }}</span>
    </p>
</div>

    <!-- Add other fields dynamically -->
</div>

    <!-- Subjects Table -->
    <table class="table-auto w-full text-sm text-left border mb-6">
      <thead>
        <tr class="bg-green-500 text-white">
          <th class="px-4 py-2 border">Subject Code</th>
          <th class="px-4 py-2 border">Subject Description</th>
          <th class="px-4 py-2 border" colspan="2">Units</th>
          <th class="px-4 py-2 border">Day</th>
          <th class="px-4 py-2 border">Time</th>
          <th class="px-4 py-2 border">Room</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-4 py-2 border">GEd 108</td>
          <td class="px-4 py-2 border">Understanding the Self</td>
          <td class="px-4 py-2 border text-center">3</td>
          <td class="px-4 py-2 border text-center">0</td>
          <td class="px-4 py-2 border">Mon</td>
          <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
          <td class="px-4 py-2 border">301</td>
        </tr>
        <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>
          <tr>
            <td class="px-4 py-2 border">GEd 108</td>
            <td class="px-4 py-2 border">Understanding the Self</td>
            <td class="px-4 py-2 border text-center">3</td>
            <td class="px-4 py-2 border text-center">0</td>
            <td class="px-4 py-2 border">Mon</td>
            <td class="px-4 py-2 border">7:00 - 10:00 AM</td>
            <td class="px-4 py-2 border">301</td>
          </tr>

        <!-- Add more rows as needed -->
      </tbody>
    </table>

    <div class="mb-6">
        <table class="table-auto w-full text-sm text-left border-collapse">
          <thead>
            <tr class="bg-green-500 text-white">
              <th class="px-4 py-2 border">Laboratory Fees</th>
              <th class="px-4 py-2 border">Other Fees</th>
              <th class="px-4 py-2 border">Assessment</th>
              <th class="px-4 py-2 border"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!-- Laboratory Fees Column -->
              <td class="px-4 py-2 border-x align-top">
                <div class="flex justify-between">
                  <span>ComLab</span>
                  <span>₱800.00</span>
                </div>
              </td>
      
              <!-- Other Fees Column -->
              <td class="px-4 py-2 border-x align-top">
                <div class="flex justify-between">
                  <span>NSTP</span>
                  <span></span>
                </div>
                <div class="flex justify-between">
                  <span>Reg Fee</span>
                  <span>₱500.00</span>
                </div>
                <div class="flex justify-between">
                  <span>ID</span>
                  <span></span>
                </div>
                <div class="flex justify-between">
                  <span>Late Reg.</span>
                  <span></span>
                </div>
                <div class="flex justify-between">
                  <span>Insurance</span>
                  <span></span>
                </div>
              </td>
      
              <!-- Assessment Column -->
              <td class="px-4 py-2 border-x align-top">
                <div class="flex justify-between">
                  <span>Tuition Fee</span>
                  <span>₱4,000.00</span>
                </div>
                <div class="flex justify-between">
                  <span>SFDF</span>
                  <span>₱1,500.00</span>
                </div>
                <div class="flex justify-between">
                  <span>SRF</span>
                  <span>₱2,025.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Misc</span>
                  <span>₱435.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Athletics</span>
                  <span>₱100.00</span>
                </div>
                <div class="flex justify-between">
                  <span>SCUAA</span>
                  <span>₱100.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Library Fee</span>
                  <span>₱50.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Lab Fees</span>
                  <span>₱800.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Other Fees</span>
                  <span>₱55.00</span>
                </div>
              </td>
      
              <!-- Total Column -->
              <td class="px-4 py-2 border-x font-bold align-top">
                <div class="flex justify-between">
                  <span>Total Units</span>
                  <span>23</span>
                </div>
                <div class="flex justify-between">
                  <span>Total Hours</span>
                  <span>29</span>
                </div>
                <div class="flex justify-between">
                  <span>Total Amount</span>
                  <span>₱9,065.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Scholarship</span>
                  <span></span>
                </div>
                <div class="flex justify-between">
                  <span>CHED Free Tuition</span>
                  <span></span>
                </div>
                <div class="flex justify-between">
                  <span>Tuition</span>
                  <span>₱4,000.00</span>
                </div>
                <div class="flex justify-between">
                  <span>SFDF</span>
                  <span>₱1,500.00</span>
                </div>
                <div class="flex justify-between">
                  <span>SRF</span>
                  <span>₱2,025.00</span>
                </div>
                <div class="flex justify-between">
                  <span>First Payment</span>
                  <span>₱9,965.00</span>
                </div>
                <div class="flex justify-between">
                  <span>Second Payment</span>
                  <span>-</span>
                </div>
                <div class="flex justify-between">
                  <span>Third Payment</span>
                  <span>-</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
  

    <p class="text-sm text-gray-600">NOTE: Your slots on the above subjects will be confirmed only upon payment.</p>

    <div class="mt-6 text-left space-y-3">
      <p class="text-sm">Old/New Student <span class="font-semibold">Old Student</span></p>
      <p class="text-sm">Registration Status: <span class="font-semibold">Regular</span></p>
      <p class="text-sm">Date of Birth: <span class="font-semibold">December 14, 2024</span></p>
      <p class="text-sm">Gender: <span class="font-semibold">Male</span></p>
      <p class="text-sm">Contact Number: <span class="font-semibold">09705201284</span></p>
      <p class="text-sm">Email Address: <span class="font-semibold">aurinlinus26@gmail.com</span></p>
      <p class="text-sm">Student's Signature: <span class="font-semibold">______________________</span></p>
    </div>
  </div>
  </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('downloadPdfBtn').addEventListener('click', function () {
      const element = document.getElementById('registrationForm');  // Get the div element to be converted to PDF

      // Generate the PDF and download it with default settings
      html2pdf().from(element).save('registration_form.pdf');
    });
  });
</script>



@endsection
