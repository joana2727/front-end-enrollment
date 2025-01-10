@extends('layouts.student.navbar')

    @php
        $title = 'CVSU - Student Schedule';
    @endphp

@section('content')

<div class="flex flex-col flex-1">
    <div class="bg-white p-2 shadow-small mb-4 h-28">
        <div class="overflow-x-auto w-full">
            <table class="min-w-full bg-white shadow-sm rounded-lg">
                <thead>
                    <tr class="bg-primary">
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Student No.</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Student Name</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">School Year</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Semester</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Course</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Year Level</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Section</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">202312345</td>
                        <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
                        <td class="px-6 py-4 text-sm text-gray-600">2024-2025</td>
                        <td class="px-6 py-4 text-sm text-gray-600">1st Semester</td>
                        <td class="px-6 py-4 text-sm text-gray-600">BS Computer Science</td>
                        <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Section A</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white p-2 shadow-small" style="height: 25rem;">
        <div class="flex justify-between items-center px-4 py-2">
            <h2 class="text-lg font-bold text-primary">Enrolled Subjects</h2>
            <button onclick="openModal()" class="bg-blue-500 text-white text-sm px-2 py-2 rounded shadow hover:bg-blue-700">View Subject Schedule</button>
        </div>

        <div class="overflow-x-auto w-full">
            <table class="min-w-full bg-white shadow-sm rounded-lg">
                <thead>
                    <tr class="bg-primary">
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Student No.</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Student Name</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">School Year</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Semester</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Course</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Year Level</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-light">Section</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">202312345</td>
                        <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
                        <td class="px-6 py-4 text-sm text-gray-600">2024-2025</td>
                        <td class="px-6 py-4 text-sm text-gray-600">1st Semester</td>
                        <td class="px-6 py-4 text-sm text-gray-600">BS Computer Science</td>
                        <td class="px-6 py-4 text-sm text-gray-600">3rd Year</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Section A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="scheduleModal" class=" fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-10 rounded-lg shadow-lg w-[80%] max-h-[100%]" style="border: 1px solid #ccc;">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold text-primary">Subject Schedule</h2>
            <div class="flex space-x-4">
                <!-- Download PDF Button -->
                <button id="downloadPdfButton" class="bg-blue-500 text-white text-sm px-4 py-2 rounded shadow hover:bg-blue-700">
                    Download PDF
                </button>
                <!-- Exit Button -->
                <button onclick="exitModal()" class="bg-red text-white text-sm px-4 py-2 rounded shadow hover:bg-red-700">
                    Exit
                </button>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="table-container overflow-y-auto max-h-[60vh]">
            <table id="scheduleTable" class="table-auto w-full border-collapse text-sm">
                <thead class="sticky top-0 bg-blue-500 text-white z-10">
                    <tr>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Time</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Monday</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Tuesday</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Wednesday</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Thursday</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Friday</th>
                        <th class="w-[14%] border border-gray-300 text-center p-2 font-semibold">Saturday</th>
                    </tr>
                </thead>
                <tbody id="schedule-body">
                    <!-- Schedule will be dynamically generated -->
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>


<script>
   function openModal() {
    document.getElementById('scheduleModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('scheduleModal').classList.add('hidden');
}

function exitModal() {
    document.getElementById('scheduleModal').classList.add('hidden');
}

const subjectStyles = {
    cosc200a: { backgroundColor: "#f39c12", color: "#fff", fontWeight: "bold" },
    cosc105: { backgroundColor: "#27ae60", color: "#fff", fontWeight: "bold" },
    itec80: { backgroundColor: "#34495e", color: "#fff", fontWeight: "bold" },
    cosc100: { backgroundColor: "#e67e22", color: "#fff", fontWeight: "bold" },
    cosc111: { backgroundColor: "#2980b9", color: "#fff", fontWeight: "bold" },
};

const schedule = [
    { subject: "COSC200A", day: "Monday", start: "7:00", end: "8:00", type: "Lecture", color: "bg-orange-500 text-white" },
    { subject: "COSC105", day: "Monday", start: "11:00", end: "1:00", type: "Laboratory", color: "bg-green-500 text-white" },
    { subject: "ITEC80", day: "Tuesday", start: "3:00", end: "5:00", type: "Lecture", color: "bg-primary text-white" },
    { subject: "COSC100", day: "Friday", start: "7:00", end: "9:00", type: "Lecture", color: "bg-orange-600 text-white" },
    { subject: "COSC111", day: "Friday", start: "11:00", end: "1:00", type: "Laboratory", color: "bg-blue-500 text-white" },
    { subject: "COSC105", day: "Saturday", start: "11:00", end: "1:00", type: "Lecture", color: "bg-green-500 text-white" },
];

const timeSlots = [
    "7:00", "7:30", "8:00", "8:30", "9:00", "9:30",
    "10:00", "10:30", "11:00", "11:30", "12:00", "12:30",
    "1:00", "1:30", "2:00", "2:30", "3:00", "3:30",
    "4:00", "4:30", "5:00", "5:30", "6:00", "6:30",
    "7:00", "7:30", "8:00", "8:30", "9:00"
];

const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
const scheduleBody = document.getElementById("schedule-body");

// Helper function to calculate row span
function calculateRowSpan(start, end) {
    const startIndex = timeSlots.indexOf(start);
    const endIndex = timeSlots.indexOf(end) + 1;
    return endIndex - startIndex;
}

// Create rows for the schedule
timeSlots.forEach((time, timeIndex) => {
    const row = document.createElement("tr");

    // Create the time column
    const timeCell = document.createElement("td");
    timeCell.textContent = time;
    timeCell.style.border = "1px solid #ccc";
    timeCell.style.textAlign = "center";
    timeCell.style.padding = "5px";
    row.appendChild(timeCell);

    // Track cells that are skipped due to row spans
    days.forEach((day) => {
        // Check if the cell is already spanned
        const isCovered = schedule.some(
            (subj) =>
                subj.day === day &&
                timeSlots.indexOf(subj.start) < timeIndex &&
                timeSlots.indexOf(subj.end) > timeIndex
        );

        // Skip creating cells for covered slots
        if (isCovered) return;

        const cell = document.createElement("td");
        cell.style.border = "1px solid #ccc";
        cell.style.textAlign = "center";
        cell.style.padding = "5px";

        // Check if a subject starts at this time and day
        const subject = schedule.find((subj) => subj.day === day && subj.start === time);

        if (subject) {
            // Add time, subject name, and type
            cell.innerHTML = `
                <div class="text-xs">${subject.start} - ${subject.end}</div>
                <div class="font-bold">${subject.subject}</div>
                <div class="text-xs italic">${subject.type}</div>
            `;
            cell.className += ` ${subject.color}`;
            cell.rowSpan = calculateRowSpan(subject.start, subject.end);

            // Append the spanned cell
            row.appendChild(cell);
        } else {
    // Check if this cell is not already covered by a previous rowspan
    const isAlreadyCovered = schedule.some(
        (subj) =>
            subj.day === day &&
            timeSlots.indexOf(subj.start) < timeIndex &&
            timeSlots.indexOf(subj.end) > timeIndex
    );

    if (!isAlreadyCovered) {
        // Append the empty cell
        row.appendChild(cell);
    }
}

    });

    // Append the row to the table
    scheduleBody.appendChild(row);
});


document.getElementById("downloadPdfButton").addEventListener("click", () => {
    // Initialize jsPDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Add title
    doc.setFont("Helvetica", "bold");
    doc.setFontSize(16);
    doc.text("Subject Schedule", 105, 20, { align: "center" });

    // Target the table using its id
    const scheduleTable = document.getElementById("scheduleTable");

    // Add table to the PDF with colors
    doc.autoTable({
        html: scheduleTable,
        startY: 30,
        styles: {
            halign: "center", // Align cell content horizontally to the center
            valign: "middle", // Align cell content vertically to the middle
            cellPadding: 2,
            lineWidth: 0.2,
        },
        headStyles: {
            fillColor: [200, 200, 200], // Light gray header background
            textColor: [0, 0, 0], // Black text for header
        },
        bodyStyles: {
            textColor: (data) => {
                const cell = data.cell.raw;
                return getComputedStyle(cell).color;
            },
            fillColor: (data) => {
                const cell = data.cell.raw;
                const bgColor = getComputedStyle(cell).backgroundColor;

                // Convert RGB to [R, G, B] array
                const match = bgColor.match(/\d+/g);
                return match ? [parseInt(match[0]), parseInt(match[1]), parseInt(match[2])] : null;
            },
        },
    });

    // Save the PDF
    doc.save("schedule.pdf");
});

</script>
@endsection
