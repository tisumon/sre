
@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Category form</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" id="horizontal-password-input">
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Subject</label>
                                <div class="col-sm-9">
                                    <input type="text" name="subject-name" class="form-control-file" id="horizontal-password-input">
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Bangla</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
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


