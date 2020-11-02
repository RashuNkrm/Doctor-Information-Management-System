@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="color: red; ">Create Department </h3>
	<form method="POST" action="{{route('department.store')}}">
	
	{{ csrf_field() }}
<br>
	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;"> Department Name</label>
	<select class="form-control" name='name'>
			
			<option name='name' value="Anesthetics" >Anesthetics</option>
			<option name='name' value="Breast Screening">Breast Screening</option>
			<option name='name' value="Cardiology">Cardiology</option>
			<option name='name' value="ENT">ENT</option>
			<option name='name' value="Gastroenterology">Gastroenterology</option>
			<option name='name' value="General Surgery">General Surgery</option>
			<option name='name' value="Hematology">Hematology</option>
			<option name='name' value="Neurology">Neurology</option>
			<option name='name' value="Oncology">Oncology</option>
			<option name='name' value="Ophthalmology">Ophthalmology</option>
			<option name='name' value="Urology" >Urology</option>
			
			
	</select>
	</div>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Description</label>
	<textarea  class="form-control" name="description"></textarea>
	</div>


	<button class="btn btn-success">Create</button>
	</form>
</div>

@include('dash.footer')