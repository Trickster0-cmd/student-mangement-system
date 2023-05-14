<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.admin');
    }
    
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    
    public function create()
    {
    $course = Course::all();
    return view('students.create', compact('course'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'studentid' => 'required',
            'name' => 'required',
            'course' => 'required',
            'year' => 'required|integer',
        ]);
    
        $student = Student::create($validatedData);
    
        return redirect(route('students.index'))->with('success', 'Student created successfully.');
    }
    
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    
    public function edit(Student $student)
    {

        $course = Course::all(); // Load all courses from the database
    return view('students.edit', compact('student', 'course'));
    }
    
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'studentid' => 'required',
            'name' => 'required',
            'course' => 'required',
            'year' => 'required|integer',
        ]);
    
        $student->update($validatedData);
    
        return redirect(route('students.index'))->with('success', 'Student updated successfully.');
    }
    
    public function destroy(Student $student)
    {
        $student->delete();
    
        return redirect(route('students.index'))->with('success', 'Student deleted successfully.');
    }
    
}
