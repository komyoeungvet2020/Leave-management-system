@extends('layouts.app')

@section('content')
<link href="./css/app.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-12 mb-5">
                <a class="btn btn-primary" href="{{route('leave.create')}}">Create Leave</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Leave From</th>
                            <th>Leave To</th>
                            <th>Leave Type</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leaves as $item)
                                <tr>
                                    <td>{{$index++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->leave_from}}</td>
                                    <td>{{$item->leave_to}}</td>
                                    <td>{{$item->type->type ?? null}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <a href="{{route('leave.show',$item->id)}}" class="btn btn-info">Show</a>
                                        <a href="{{route('leave.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('leave.delete',$item->id)}}" class="btn btn-danger">delete</a>

                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
