@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="text-align: left; color: red;">Create Doctor Info</h3>
	<form method="POST" action="{{route('doctor.store')}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}


	
	<div class="form-group ">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Name</label>
	<input type="text" class="form-control " name="name" required="">
	</div>

	<div>
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Gender</label>
	<input type="radio"  name="gender" required="" value="male">Male
	<input type="radio" name="gender" required="" value="female">Female
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Address</label>
	<input type="address" class="form-control " name="address" required="">
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Phone</label>
	<input type="number" class="form-control " name="phone" required="" >
	@if($errors->has('phone'))
	<div class="error-text">
		{{$errors->first('phone')}}
	</div>
	@endif

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Date of Birth</label>
	<input type="date" class="form-control " name="dob" required="" >
	@if($errors->has('dob'))
	<div class="error-text">
		{{$errors->first('dob')}}
	</div>
	@endif
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
