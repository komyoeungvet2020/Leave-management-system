@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
							<div class="card-head text-center">
								<h4>Create Leave</h4>
							</div>
								<div class="card-body">
									<form action="{{route('leave.store')}}" method="post">
										@csrf
										<div class="form-group mb-3">
											<label for="name">Username <span class="text-text-danger">*</span></label>
											<input type="text" name="name" id="name" class="form-control" >
										</div>
										<div class="form-group mb-3">
											<label for="leave_from">Leave From <span class="text-danger">*</span></label>
											<input type="date" name="leave_from" id="leave_from" class="form-control" >
										</div>
										<div class="form-group mb-3">
											<label for="leave_to">Leave To <span class="text-danger">*</span></label>
											<input type="date" name="leave_to" id="leave_to" class="form-control" >
										</div>
										<div class="form-group mb-3">
											<label for="type_id">Leave Type <span class="text-danger">*</span></label>
											<select name="type_id" id="type_id" class="form-control">
												<option value="">Select Leave Type</option>
												@foreach($types as $key => $value)
												<option value="{{$value->id}}">{{$value->type}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group mb-3">
											<label for="description">Description<span class="text-danger">*</span></label>
											<input type="text" name="description" id="description" class="form-control" >
										</div>
										<div class="form-group mb-3">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
            </div>
        </div>
    </div>
</div>
@endsection
