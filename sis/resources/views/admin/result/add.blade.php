
@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Students form</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control select2" required name="subject_id">
                                        <option value="" disabled selected>--Select Subject--</option>
                                        <optgroup label="">
                                            @foreach($subjects as $subject)
                                                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="achieve_number" id="horizontal-firstname-input">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">
                                                        <div  class="form-group col-lg-4">
                                                            <label for="subject">Subject</label>
                                                            <select class="form-control select2" required name="subject_id">
                                                                <option value="" disabled selected>--Select Subject--</option>

                                                                @foreach($subjects as $subject)
                                                                    <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>

                                                        <div  class="form-group col-lg-3">
                                                            <label for="number">Number</label>
                                                            <input type="number" id="number" class="form-control"/>
                                                        </div>

                                                        <div class="col-lg-2 align-self-center">
                                                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                        </div>

                                                        <div class="col-lg-2 align-self-center">
                                                            <input data-repeater-delete type="button" class="btn btn-primary" value="Delete"/>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



