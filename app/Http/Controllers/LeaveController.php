<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Type;

class LeaveController extends Controller
{
    public function index()
    {
        $index = 1;
        $leaves = Leave::all();
        return view('home',compact('leaves','index'));
    }
    
    public function create(){
        $types = Type::all();
        return view('leaves.create',compact('types'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'leave_from'=>'required',
            'leave_to'=>'required',
            'type_id' => 'required',
            'description'=>'required'
        ]);
        
        $data = [
            'name' => $request->name,
            'leave_from' => $request->leave_from,
            'leave_to' => $request->leave_to,
            'type_id' => $request->type_id,
            'description' => $request->description,
        ];
        Leave::create($data);
        return redirect('home');
    }
    
    public function edit($id){
        $leave = Leave::find($id);
        $types = Type::all();
        return view('leaves.edit',compact('leave','types'));
    }
    
    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'leave_from'=>'required',
            'leave_to'=>'required',
            'type_id' => 'required',
            'description'=>'required'
        ]);
        
        $leave = Leave::find($id);
        
        $data = [
            'name' => $request->name,
            'leave_from' => $request->leave_from,
            'leave_to' => $request->leave_to,
            'type_id' => $request->type_id,
            'description' => $request->description,
        ];
        $leave->update($data);
        return redirect('home');
    }
    
    public function show($id){
        $leave = Leave::find($id);
        return view('leaves.show',compact('leave'));
    }
    
    public function distroy($id){
        $leave = Leave::find($id);
        $leave->delete();
        return redirect()->back();
    }
}
