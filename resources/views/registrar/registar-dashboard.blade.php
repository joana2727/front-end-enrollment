@extends('layouts.registrar.navbar')

@section('content')

<!-- Student Count Per Status -->
<div class="flex flex-wrap gap-4 mb-5 p-2 bg-light-gray rounded-2xl mx-auto mt-1">

    <!-- Regular -->
    <div class="bg-yellow shadow-small rounded-2xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg font-semibold">Regular</h3>
            <p class="text-4xl text-dark font-bold">753</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-black"></div>
    </div>

    <!-- Irregular -->
    <div class="bg-lime-green shadow-small rounded-2xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg font-semibold">Irregular</h3>
            <p class="text-4xl text-dark font-bold">192</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-black"></div>
    </div>

    <!-- Transferee -->
    <div class="bg-moss-green shadow-small rounded-2xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg font-semibold">Transferee</h3>
            <p class="text-4xl text-dark font-bold">43</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-black"></div>
    </div>

    <!-- Returnee -->
    <div class="bg-lime-green shadow-small rounded-2xl p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-lg font-semibold">Returnee</h3>
            <p class="text-4xl text-dark font-bold">29</p>
        </div>
        <div class="absolute top-3 right-4 w-4 h-4 rounded-full bg-black"></div>
    </div>
</div>

<!-- Student Count, Table, and Pie Chart Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <!-- Left Part - Student Count and Sections Table -->
    <div class="space-y-6">
        <!-- Total Students per Course Container -->
        <div class="bg-white p-6 rounded-2xl shadow-small">
            <ul class="space-y-4">
                <!-- Total Students -->
                <li class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-full bg-lime-green flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L1 7l11 5 9-4.09V17a3.99 3.99 0 0 1 2 3.44V9.91L12 2z"/>
                                <path d="M4 14.4v3.44a4 4 0 0 0 8 0V14.4l-4 2-4-2z"/>
                            </svg>
                        </div>
                        <span class="text-gray-600 font-semibold">Total Students</span>
                    </div>
                    <div class="flex items-center">
                        <div class="h-6 w-px bg-gray-300 mr-4"></div>
                        <span class="text-lg font-bold">1,522</span>
                    </div>
                </li>
                <!-- BS Computer Science -->
                <li class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-full bg-moss-green flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L1 7l11 5 9-4.09V17a3.99 3.99 0 0 1 2 3.44V9.91L12 2z"/>
                                <path d="M4 14.4v3.44a4 4 0 0 0 8 0V14.4l-4 2-4-2z"/>
                            </svg>
                        </div>
                        <span class="text-gray-600 font-semibold">BS Computer Science</span>
                    </div>
                    <div class="flex items-center">
                        <div class="h-6 w-px bg-gray-300 mr-4"></div>
                        <span class="text-lg font-bold">1,522</span>
                    </div>
                </li>
                <!-- BS Information Technology -->
                <li class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L1 7l11 5 9-4.09V17a3.99 3.99 0 0 1 2 3.44V9.91L12 2z"/>
                                <path d="M4 14.4v3.44a4 4 0 0 0 8 0V14.4l-4 2-4-2z"/>
                            </svg>
                        </div>
                        <span class="text-gray-600 font-semibold">BS Information Technology</span>
                    </div>
                    <div class="flex items-center">
                        <div class="h-6 w-px bg-gray-300 mr-4"></div>
                        <span class="text-lg font-bold">2,751</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Sections Table -->
        <div class="bg-white p-6 rounded-2xl shadow-small">
            <h3 class="text-lg font-bold mb-4">Sections</h3>
            <div class="flex justify-start space-x-3 mb-4">
                <button class="px-3 py-2 text-sm text-white bg-lime-green rounded-lg hover:bg-primary">
                    BSCS
                </button>
                <button class="px-3 py-2 text-sm text-white bg-moss-green rounded-lg hover:bg-primary">
                    BSIT
                </button>
            </div>

            <table class="min-w-full bg-white shadow-sm rounded-lg">
                <thead>
                    <tr class="bg-light-gray">
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Year</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Section</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Number of Students</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">1st Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">5 Sections</td>
                        <td class="px-6 py-4 text-sm text-gray-600">230 Students</td>
                    </tr>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">2nd Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">4 Sections</td>
                        <td class="px-6 py-4 text-sm text-gray-600">200 Students</td>
                    </tr>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">6 Sections</td>
                        <td class="px-6 py-4 text-sm text-gray-600">280 Students</td>
                    </tr>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">4th Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">3 Sections</td>
                        <td class="px-6 py-4 text-sm text-gray-600">150 Students</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  <!-- Pie Chart -->
<div class="bg-white p-6 rounded-2xl shadow-small">
    <h3 class="text-lg font-bold text-gray-700 mb-4">Student Distribution</h3>
    <div class="flex justify-center items-center h-80">
        <canvas id="studentDistributionChart" class="w-full h-full object-contain rounded-lg"></canvas>
    </div>
    <!-- Legends -->
    <div class="flex justify-center mt-4 space-x-6" id="customLegend">
        <!-- Dynamic labels will be added here -->
    </div>
</div>

<script>
  // Sample dynamic data for student distribution
  const studentData = {
    regular: 45,     // Example data
    irregular: 30,
    transferee: 15,
    returnee: 10,
  };

  // Function to update the chart and text dynamically
  function updateStudentDistributionChart() {
    // Get the total count
    const totalStudents = Object.values(studentData).reduce((sum, count) => sum + count, 0);

    // Data for the pie chart
    const data = {
      labels: ['Regular', 'Irregular', 'Transferee', 'Returnee'],
      datasets: [{
        data: [studentData.regular, studentData.irregular, studentData.transferee, studentData.returnee],
        backgroundColor: ['#F1B24A', '#9DC88D', '#A2B568', '#164A41'],
        borderColor: ['#F1B24A', '#9DC88D', '#A2B568', '#164A41'],
        borderWidth: 1,
      }],
    };

    // Config for the chart
    const config = {
      type: 'pie',
      data: data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false,  // Disable the default legend
          },
        },
      },
    };

    // Initialize Chart.js
    const ctx = document.getElementById('studentDistributionChart').getContext('2d');
    new Chart(ctx, config);

    // Add custom legend labels below the chart
    const customLegend = document.getElementById('customLegend');
    customLegend.innerHTML = '';  // Clear existing labels

    const labels = ['Regular', 'Irregular', 'Transferee', 'Returnee'];
    const colors = ['#F1B24A', '#9DC88D', '#A2B568', '#164A41'];

    // Dynamically create label elements
    labels.forEach((label, index) => {
      const labelDiv = document.createElement('div');
      labelDiv.className = 'flex items-center space-x-2 mt-20';

      const colorCircle = document.createElement('span');
      colorCircle.className = 'w-4 h-4 inline-block rounded-full';
      colorCircle.style.backgroundColor = colors[index];

      const labelText = document.createElement('span');
      labelText.className = 'text-base text-gray-600';
      labelText.textContent = label;

      labelDiv.appendChild(colorCircle);
      labelDiv.appendChild(labelText);

      customLegend.appendChild(labelDiv);
    });
  }

  // Call the function to render the chart on page load
  updateStudentDistributionChart();
</script>



@endsection
