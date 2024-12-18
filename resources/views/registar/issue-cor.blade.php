@extends('layouts.registrar.navbar')

@section('content')

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Registrar COR Board</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <!-- Student Dropdown -->
        <label for="student-id" class="block text-sm font-bold text-gray-700 mb-2">Select Student ID:</label>
        <select id="student-id" class="block w-full border border-gray-300 rounded-lg px-4 py-2 mb-4">
            <option value="" disabled selected>Select ID</option>
            <option value="20230001">20230001 - John Doe</option>
            <option value="20230002">20230002 - Jane Smith</option>
            <!-- More options can be added dynamically from the backend -->
        </select>

        <!-- Student Info -->
        <div id="student-info" class="bg-gray-50 p-4 rounded-lg shadow-inner hidden">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Student Information</h2>
            <p><strong>Name:</strong> <span id="student-name"></span></p>
            <p><strong>Program:</strong> <span id="student-program"></span></p>
            <p><strong>Year:</strong> <span id="student-year"></span></p>

            <!-- Subjects List -->
            <div id="subjects-container" class="mt-4"></div>
        </div>

        <!-- Grade Entry -->
        <div id="grade-entry" class="mt-6 hidden">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Enter Grades</h2>
            <div id="grade-inputs-container" class="space-y-4"></div>
            <button onclick="submitGrades()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">Submit Grades</button>
        </div>

        <!-- PDF Export -->
        <button id="export-pdf" onclick="exportToPDF()" class="mt-6 hidden bg-green-500 text-white px-4 py-2 rounded-lg">Export to PDF</button>
    </div>
</div>

<script>
    // Static Student Data
    const students = {
        "20230001": {
            name: "John Doe",
            program: "BSCS",
            year: "1st Year",
            subjects: ["COSC101", "COSC102", "COSC103", "COSC104", "COSC105", "COSC106", "COSC107", "COSC108", "COSC109"],
            grades: {}
        },
        "20230002": {
            name: "Jane Smith",
            program: "BSIT",
            year: "2nd Year",
            subjects: ["ITCS201", "ITCS202", "ITCS203", "ITCS204", "ITCS205", "ITCS206", "ITCS207", "ITCS208"],
            grades: {}
        }
    };

    // Populate Student Info and Subjects on Dropdown Change
    document.getElementById('student-id').addEventListener('change', function () {
        const studentId = this.value;
        const student = students[studentId];

        if (student) {
            // Display student info
            document.getElementById('student-info').classList.remove('hidden');
            document.getElementById('student-name').innerText = student.name;
            document.getElementById('student-program').innerText = student.program;
            document.getElementById('student-year').innerText = student.year;

            // Populate Subjects
            populateSubjects(student.subjects);

            document.getElementById('grade-entry').classList.remove('hidden');
            document.getElementById('export-pdf').classList.add('hidden'); // Hide PDF button until grades are submitted
        }
    });

    // Populate subjects dynamically based on student program and year
    function populateSubjects(subjects) {
        const subjectsContainer = document.getElementById('subjects-container');
        subjectsContainer.innerHTML = `<p class="text-sm font-bold text-gray-700">Subjects:</p><ul class="list-disc pl-5">${subjects.map(subject => `<li>${subject}</li>`).join('')}</ul>`;
        
        // Populate the input fields for grades
        const gradeInputsContainer = document.getElementById('grade-inputs-container');
        gradeInputsContainer.innerHTML = '';

        subjects.forEach(subject => {
            gradeInputsContainer.innerHTML += `
                <div>
                    <label for="${subject}-grade" class="block text-sm font-bold text-gray-700 mb-1">${subject}</label>
                    <input type="text" id="${subject}-grade" class="block w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Enter grade">
                </div>
            `;
        });
    }

    // Submit Grades
    function submitGrades() {
        const studentId = document.getElementById('student-id').value;
        if (!studentId) return alert("Select a student first!");

        students[studentId].subjects.forEach(subject => {
            const grade = document.getElementById(`${subject}-grade`).value || "N/A";
            students[studentId].grades[subject] = grade;
        });

        alert("Grades submitted successfully!");
        document.getElementById('export-pdf').classList.remove('hidden'); // Show PDF button after submitting grades
    }

    // Export to PDF (Simulation)
    function exportToPDF() {
        const studentId = document.getElementById('student-id').value;
        if (!studentId) return alert("Select a student first!");

        const student = students[studentId];
        let pdfContent = `
            Certificate of Registration
            ---------------------------
            Name: ${student.name}
            Program: ${student.program}
            Year: ${student.year}
            Grades:
        `;

        Object.entries(student.grades).forEach(([subject, grade]) => {
            pdfContent += `- ${subject}: ${grade}\n`;
        });

        console.log("PDF Exported:\n", pdfContent); // For simulation, output to console
        alert("PDF exported successfully!");
    }
</script>
@endsection
