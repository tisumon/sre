
@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Student Info</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Student ID</th>
                                <th>Image</th>
                                <th>Student Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$student->id}}</td>
                                    <td>
                                        <img src="{{asset($student->image)}}" alt="" height="50" width="50"/>
                                    </td>
                                    <td>{{$student->name}}</td>
                                    <td>
                                        <a href="{{route('student.view', ['id'=>$student->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{route('student.edit', ['id'=>$student->id])}}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('student.delete', ['id'=>$student->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

