<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //
     public function view() {
        $id = 1;
        $students = Student::all()->sortByDesc('date');
        return view('students.view', compact('students', 'id'));
    }
}
