<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function status()
    {
        // Use the correct path with the 'student' directory
        return view('student.student-status'); // Correct path
    }
    public function updateDetails(Request $request)
    {
        // Extract the data from the request
        $studentData = $request->all();

        // Simulate storing the data (or use session/database to persist)
        session(['studentDetails' => $studentData]);

        return response()->json([
            'message' => 'Student details updated successfully!',
            'data' => $studentData,
        ]);
    }
}


