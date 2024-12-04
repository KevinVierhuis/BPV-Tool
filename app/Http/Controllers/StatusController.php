<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    // Method for handling the /docentzaken page
    public function index()
    {
        // Get the students or other relevant data
        $students = Student::all();

        // Return the docentzaken view and pass the student data to it
        return view('docentzaken', compact('students'));
    }

    public function edit($studentId)
    {
        // Edit logic here, e.g., fetching the student data for editing
        $student = Student::findOrFail($studentId);
        return view('editStatus', compact('student'));
    }

    public function update(Request $request, $studentId)
    {
        // Update logic here
        $student = Student::findOrFail($studentId);
        $student->status = $request->status;
        $student->save();

        // Redirect back to docentzaken or another page
        return redirect()->route('docentzaken');
    }
}
