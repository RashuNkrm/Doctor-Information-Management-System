<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Department;
class DoctorController extends Controller
{
    public function index(){
    	$data=Doctor::paginate(5);   //instead of get can also use paginate which will show only those number of data that are indexed inthe paginated function.

    	
    	return view('dash.doctor.index',compact('data'));
   
    }

    public function create(){
        $data=Department::get();
    	return view('dash.doctor.create',compact('data'));
    }
    public function store(Request $request){
         $message="Information Saved";
    	Doctor::create([
    		'name'=>$request->name,
    		'gender'=>$request->gender,
    		'address'=>$request->address,
    		'phone'=>$request->phone,
    		'dob'=>$request->dob,
    		'department_id'=>$request->department_id
    		]);

        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|min:10|max:10',
            'dob'=>'date_format:Y-m-d|before:today'
            ]);
    	return redirect()->route('admin1.doctor')->with('status',$message);

    }

    public function edit($id){
    	$data = Doctor::find($id);
        $department = Department::get();
    	 return view('dash.doctor.edit',compact('data','department'));
    }

     public function update(Request $request,$id)
    {
         $message="Information Updated";
    	Doctor::find($id)->update([
    		'name'=>$request->name,
    		'gender'=>$request->gender,
    		'address'=>$request->address,
    		'phone'=>$request->phone,
    		'dob'=>$request->dob,
    		'department_id'=>$request->department_id
    		]);
            $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|min:10|max:10',
            'dob'=>'date_format:Y-m-d|before:today'
            ]);
    	return redirect()->route('admin1.doctor')->with('status',$message);
    }
    public function destroy($id)
    {
         $message="Information Deleted";
    	$data=Doctor::find($id);
    	$data->delete();
    	return redirect()->route('admin1.doctor')->with('status',$message);

    }
}