@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Leave From</th>
                            <th>Leave To</th>
                            <th>Leave Type</th>
                            <th>Description</th>
                        </tr>
                                <tr>
                                    <td>{{$leave->id}}</td>
                                    <td>{{$leave->name}}</td>
                                    <td>{{$leave->leave_from}}</td>
                                    <td>{{$leave->leave_to}}</td>
                                    <td>{{$leave->type->type}}</td>
                                    <td>{{$leave->description}}</td>
                                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
