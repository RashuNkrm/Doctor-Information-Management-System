<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Department;

class ScheduleController extends Controller
{
    public function index(){
    	$data=Schedule::paginate(5);   //instead of get can also use paginate which will show only those number of data that are indexed inthe paginated function.
    	return view('dash.schedule.index',compact('data'));
   }

   public function create(){
    $data=Department::get();
   		    	return view('dash.schedule.create',compact('data'));
    }
    public function store(Request $request){
           $message="Information Stored";
    	Schedule::create([
    		'schedule_date'=>$request->schedule_date,
    		'schedule_time'=>$request->schedule_time,
    		'schedule_day'=>$request->schedule_day,
            'department_id'=>$request->department_id
    		]);
          $this->validate($request,[
           
            'schedule_date'=>'date_format:Y-m-d|after:today'
            ]);
    	return redirect()->route('admin1.schedule')->with('status',$message);
    }

 public function edit($id){
        $data=Schedule::find($id);
        $department=Department::get();
         return view('dash.schedule.edit',compact('data','department'));
    }

    public function update(Request $request,$id){

           $message="Information Updated";
        Schedule::find($id)->update([
            'schedule_date'=>$request->schedule_date,
            'schedule_time'=>$request->schedule_time,
            'schedule_day'=>$request->schedule_day,
            'department_id'=>$request->department_id
            ]);
            $this->validate($request,[
           
            'schedule_date'=>'date_format:Y-m-d|after:today'
            ]);
        return redirect()->route('admin1.schedule')->with('status',$message);
    }

     public function destroy($id)
    {
           $message="Information Deleted";
        $data=Schedule::find($id);
        $data->delete();
        return redirect()->route('admin1.schedule')->with('status',$message);

    }
}
?>