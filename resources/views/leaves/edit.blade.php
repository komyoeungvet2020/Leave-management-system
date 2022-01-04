@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
							<div class="card-head text-center">
								<h4>Update Leave</h4>
							</div>
							<div class="card-body">
								<form action="{{route('leave.update',$leave->id)}}" method="post">
									@csrf
									@method('put')
									<div class="form-group  mb-3">
										<label for="name">Username <span class="danger">*</span></label>
										<input type="text" name="name" id="name"  value="{{$leave->name}}" class="form-control" required>
									</div>
									<div class="form-group  mb-3">
										<label for="leave_from">Leave From <span class="danger">*</span></label>
										<input type="date" name="leave_from" id="leave_from"  value="{{$leave->leave_from}}"class="form-control" required>
									</div>
									<div class="form-group mb-3">
										<label for="leave_to">Leave To <span class="danger">*</span></label>
										<input type="date" name="leave_to" id="leave_to" value="{{$leave->leave_to}}" class="form-control" required>
									</div>
									<div class="form-group mb-3">
										<label for="leave_type">Leave Type <span class="danger">*</span></label>
										<select name="type_id" id="type_id" class="form-control">
											<option value="">Select Leave Type</option>
											@foreach($types as $key => $value)
											<option value="{{$value->id}}" {{$leave->type_id == $value->id ? "selected" :""}} >{{$value->type}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group mb-3">
										<label for="description">Description <span class="danger">*</span></label>
										<input type="text" name="description" id="description" value="{{$leave->description}}" class="form-control" required>
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
