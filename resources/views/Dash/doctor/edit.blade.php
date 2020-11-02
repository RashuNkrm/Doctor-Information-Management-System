@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="color: red; text-align: left;">Create Doctor Information</h3>
	<form method="POST" action="{{route('doctor.update',$data->id)}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}



	

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Name</label>
	<input style="font-family: sans-serif;  font-size:18px;" type="text" class="form-control " name="name" value="{{$data->name}}" required="">
	</div>


	

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Gender</label>
	<span><input  style="font-family: sans-serif;  font-size:18px;" type="radio" name="gender" value="male" @if($data->gender=='male') checked @endif" required="">Male</span>
	<input  style="font-family: sans-serif;  font-size:18px;" type="radio" name="gender" value="female" @if($data->gender=='female') checked @endif" required="">Female
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Address</label>
	<input  style="font-family: sans-serif;  font-size:18px;" type="address" class="form-control " name="address" value="{{$data->address}}" required="">
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Phone No.</label>
	<input style="font-family: sans-serif;  font-size:18px;" type="number" class="form-control " name="phone" value="{{$data->phone}}" required="">
	@if($errors->has('phone'))
	<div class="error-text">
		{{$errors->first('phone')}}
	</div>
	@endif
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Date of Birth</label>
	<input style="font-family: sans-serif;  font-size:18px;" type="date" class="form-control " name="dob" value="{{$data->dob}}" required="">
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
		@foreach($department as $value)
		<option value="{{$value->id}}" @if($value->id==$data->department_id) selected @endif> {{$value->name}}</option>
		@endforeach
	</select>
	</div>
	
	<button class="btn btn-success" style="font-family: sans-serif; font-weight: bold; font-size:18px; color: black;" >Update</button>
	</form>
</div>

@include('dash.footer')