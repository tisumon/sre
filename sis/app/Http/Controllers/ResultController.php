<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentResult;
use App\Models\Subject;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    private $subjects ;
    private $result;
    private $results;

    public function index()
    {
        $this->subjects = Subject::all();
        return view('admin.result.add', ['subjects'=>$this->subjects]);
    }
    public function manage()
    {
        $this->results = StudentResult::all();
        return view('admin.result.manage',['results'=>$this->results]);
    }
}
