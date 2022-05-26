<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $student;
    private $students;

    public function index()
    {
        return view('admin.student.add');
    }
    public function manage()
    {
        $this->students = Student::orderBy('id','desc')->get();
        return view('admin.student.manage',['students'=> $this->students]);
    }
}
