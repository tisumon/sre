
@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Students form</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <form action="{{ route('result.save') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="student_id" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-body">

                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">
														<table id="marks-table">
															<tr>
																<td colspan="3" class="text-right">
																	<span class="btn btn-primary w-md" onclick="marksEntryFieldAdd()">Add More</span>
																</td>
															</tr>
														  <tr>
															<td>Subject</td>
															<td>Number</td>
															<td></td>
														  </tr>
														  <tr>
															<td id="subjects">
																<select class="form-control select2" required name="subject_id[]">

																	@foreach($subjects as $subject)
																		<option value="{{$subject->id}}">{{$subject->subject_name}}</option>
																	@endforeach

																</select>
															</td>
															<td><input type="number" name="achieve_number[]" id="number" class="form-control"/></td>
															<td><span class="btn btn-danger w-md" onclick="myDeleteFunction(2)">Delete</span></td>
														  </tr>

														</table>
                                                    </div>

                                                </div>

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
	<script>
		let html = document.getElementById("subjects").innerHTML;
		function marksEntryFieldAdd() {
		  var table = document.getElementById("marks-table");
		  var row = table.insertRow(2);
		  var cell1 = row.insertCell(0);
		  var cell2 = row.insertCell(1);
		  var cell3 = row.insertCell(2);
		  cell1.innerHTML = html;
		  cell2.innerHTML = '<input type="number" name="achieve_number[]" id="number" class="form-control"/>';
		  cell3.innerHTML = '<span class="btn btn-danger w-md" onclick="myDeleteFunction('+row.rowIndex+')">Delete</span>';
		}

		function myDeleteFunction(x) {
			alert("Row index is: " + x);
		  document.getElementById("marks-table").deleteRow(x);
		}
</script>
@endsection



