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
    public function create(Request $request)
    {
        Student::newCategory($request);
        return redirect()->back()->with('message','Student info create successfully');
    }
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('admin.student.edit', ['student'=>$this->student]);
    }
    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/manage-student')->with('message', 'Student info updated successfully');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();

        return redirect('/manage-student')->with('message', 'Student deleted successfully');
    }

}
