@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Student ID</th>
{{--                        <td>{{$resultDetail->student_id}}</td>--}}
                    </tr>

                    <tr>
                        <th>Subject Name</th>

                        <td>{{$resultDetail->subject->subject_name}}</td>

                    </tr>

                    <tr>
                        <th>Subject Fee</th>
                        <td>{{$resultDetail->achieve_number}}</td>
                    </tr>

                    <tr>
                        <th>Feature Image</th>
                        <td><img src="{{$result['image']}}" alt="" height="50" width="50"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
