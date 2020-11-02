@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="color: red; text-align: left;">Update Schedule</h3>
	<form method="POST" action="{{route('schedule.update',$data->id)}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Date</label>
	<input style="font-family: sans-serif;  font-size:18px;" type="date" class="form-control " name="schedule_date" value="{{$data->schedule_date}}" required>
	@if($errors->has('schedule_date'))
	<div class="error-text">
		{{$errors->first('schedule_date')}}
	</div>
	@endif
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Time</label>
	<input style="font-family: sans-serif;  font-size:18px;" type="time" class="form-control " name="schedule_time" value="{{$data->schedule_time}}" required>

	</div>


	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Day</label>
	<select class="form-control" name='schedule_day'>
	
			<option >Select Day</option>
			<option name='schedule_day' value="Sunday" @if($data->schedule_day=='Sunday') selected @endif>Sunday</option>
			<option name='schedule_day' value="Monday"  @if($data->schedule_day=='Monday') selected @endif>Monday</option>
			<option name='schedule_day' value="Tuesday"  @if($data->schedule_day=='Tuesday') selected @endif>Tuesday</option>
			<option name='schedule_day' value="Wednesday"  @if($data->schedule_day=='Wednesday') selected @endif>Wednesday</option>
			<option name='schedule_day' value="Thursday"  @if($data->schedule_day=='Thursday') selected @endif>Thursday</option>
			<option name='schedule_day' value="Friday"  @if($data->schedule_day=='Friday') selected @endif>Friday</option>
			<option name='schedule_day' value="Saturday"  @if($data->schedule_day=='Saturday') selected @endif>Saturday</option>
			
			 
		</select>
		
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Select Department</label>
	<select name="department_id" class="form-control" required="">
		<option value="0">Select Department</option>
		@foreach($department as $value)
		<option value="{{$value->id}}" @if($value->id==$data->department_id) selected @endif> {{$value->name}}</option>
		@endforeach
	</select>
	</div>
	
	
	
	<button class="btn btn-success">Update</button>
	</form>
</div>

@include('dash.footer')