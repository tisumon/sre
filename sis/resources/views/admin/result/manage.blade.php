@extends('master.admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Datatable</h4>
                    <p class="card-title-desc">DataTables has most features enabled by
                        default, so all you need to do to use it with your own tables is to call
                        the construction function: <code>$().DataTable();</code>.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SI</th>
                            <th>Image</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $key=>$result)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{$result['image']}}" alt="" height="50" width="50"></td>
                            <td>{{$result['student_id']}}</td>
                            <td>{{$result['name']}}</td>
                            <td>{{$result['achieve_number']}}</td>
                            <td>
                                <a href="{{route('result.detail', ['id'=>$result['id']])}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a href="{{route('result.edit', ['id'=>$result['id']])}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('result.delete', ['id'=>$result['id']])}}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
