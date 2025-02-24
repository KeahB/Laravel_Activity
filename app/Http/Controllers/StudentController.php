<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get(); 
        return view('students.index', compact('students'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer|min:1',
        ]);

        
        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    } 

    public function create()
    {
        return view('students.create');
    }
  
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,'.$id,
            'age' => 'required|integer|min:1',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
    public function destroy($id)
{
    $student = Student::findOrFail($id); // Find student by ID
    $student->delete(); // Delete the student

    return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
}

}