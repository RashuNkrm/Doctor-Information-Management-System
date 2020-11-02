<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Doctor;

class DepartmentController extends Controller
{
   public function index(){
    	$data=Department::paginate(5);   //instead of get can also use paginate which will show only those number of data that are indexed inthe paginated function.

    	
    	return view('dash.department.index',compact('data'));
    }
    public function create()
    {
        
    	return view('dash.department.create');

    }
    public function store(Request $request)
    {
        $message="Department Saved";
        Department::create([
    	'name'=>$request->name,
    	'description'=>$request->description,
       
	]);
          $this->validate($request,[
            'name'=>'required',
            'description'=>'required'

            ]);
	return redirect()->route('admin1.department')->with('status',$message);
    }

    public function edit($id)
    {
    	$data = Department::find($id);
       //  $doctor = Doctor::get();
         
    	 return view('dash.department.edit',compact('data'));
    	
    }

    public function update(Request $request,$id)
    {   
        $message="Department Updated";
    	Department::find($id)->update([
    		'name'=>$request->name,
			'description'=>$request->description

    		]);

    	return redirect()->route('admin1.department')->with('status',$message);
    }
    public function destroy($id)
    {
        $message="Department Already used";
        if(!Doctor::where('department_id',$id)->exists())
        {
             $message="Department Deleted";
        $data=Department::find($id);
        $data->delete();
        }
       
    	return redirect()->route('admin1.department')->with('status',$message);

    }
   

}
