<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentResult;
use App\Models\Subject;
use Illuminate\Http\Request;
use function Symfony\Component\Process\findArguments;


class ResultController extends Controller
{
    private $subjects;
    private $result;
    private $results;
    private $resultDetail;

    public function index()
    {
        $this->subjects = Subject::all();
        return view('admin.result.add', ['subjects' => $this->subjects]);
    }

    public function create(Request $request)
    {
        $res = StudentResult::where('student_id', $request->student_id)->get();

        if (count($res) > 0) {
            return redirect()->back()->with('message', 'Result already entered');
        }

        foreach ($request->subject_id as $key => $subid) {
            $data = new StudentResult();
            $data->student_id = $request->student_id;
            $data->subject_id = $request->subject_id[$key];
            $data->achieve_number = $request->achieve_number[$key];
            $data->save();
        }

        return redirect()->back()->with('message', 'Result info create successfully');
    }

    public function manage()
    {
        $this->results = StudentResult::orderBy('student_id', 'ASC')->get();
        $res = [];
        $subNumber=0;
        foreach($this->results as $key=>$value){
            if(count($res)==0){
                $temp['id']=$value['id'];
                $temp['student_id']=$value['student_id'];
                $temp['name']=$value['student']->name;
                $temp['image']=$value['student']->image;
                $temp['achieve_number']=$value['achieve_number'];
                $res[]=$temp;
            }else{
                if(isset($res[$key-count($res)]['student_id']) AND $res[$key-count($res)]['student_id']==$value['student_id']){
                    $res[$key-count($res)]['achieve_number']=$temp['achieve_number']+$value['achieve_number'];
                }else{
                    $temp['id']=$value['id'];
                    $temp['student_id']=$value['student_id'];
                    $temp['name']=$value['student']->name;
                    $temp['image']=$value['student']->image;
                    $temp['achieve_number']=$value['achieve_number'];
                    $res[]=$temp;
                }
            }
        }
        return view('admin.result.manage',['results'=>$res]);
    }

    public function detail($id)
    {
        $this->resultDetail = StudentResult::find($id);
        return view('admin.result.detail', ['resultDetail' => $this->resultDetail]);
    }
}
