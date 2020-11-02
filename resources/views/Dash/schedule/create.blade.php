@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="color: red; text-align: left;">Create Schedule</h3>
	<form method="post" action="{{route('schedule.store')}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}
<br>
	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Date</label>
	<input type="date" class="form-control " name="schedule_date" required>
		@if($errors->has('schedule_date'))
	<div class="error-text">
		{{$errors->first('schedule_date')}}
	</div>
	@endif
	</div>


	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Time</label>
	<input type="time" class="form-control " name="schedule_time" required>

	</div>


	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Schedule Day</label>
	<select class="form-control" name='schedule_day'>
			<option>Select Day</option>
			<option name='schedule_day' value="Sunday" >Sunday</option>
			<option name='schedule_day' value="Monday">Monday</option>
			<option name='schedule_day' value="Tuesday">Tuesday</option>
			<option name='schedule_day' value="Wednesday">Wednesday</option>
			<option name='schedule_day' value="Thursday">Thursday</option>
			<option name='schedule_day' value="Friday">Friday</option>
			<option name='schedule_day' value="Saturday">Saturday</option>
			
	</select>
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Select Department</label>
	<select name="department_id" class="form-control" required="">
		<option value="0">Select Department</option>
		@foreach($data as $value)
		<option value="{{$value->id}}">{{$value->name}}</option>
		@endforeach
	</select>
	</div>
	
	<button class="btn btn-success">Create</button>
	</form>
</div>

@include('dash.footer')