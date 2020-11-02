@include('dash.header')

<div class="mt-3 mb-3">
<div class="container"><br><br>
	<h3 style="color: red; text-align: left;">Update Department</h3>
	<form method="POST" action="{{route('department.update',$data->id)}}">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Department Name</label>
	<select class="form-control" name='name'>
	
		
			<option name='name' value="Anesthetics" @if($data->name=='Anesthetics') selected @endif>Anesthetics</option>
			<option name='name' value="Breast Screening"  @if($data->name=='Breast Screening') selected @endif>Breast Screening</option>
			<option name='name' value="Cardiology"  @if($data->name=='ENT') selected @endif>ENT</option>
			<option name='name' value="Gastroenterology"  @if($data->name=='Gastroenterology') selected @endif>Gastroenterology</option>
			<option name='name' value="General Surgery"  @if($data->name=='General Surgery') selected @endif>General Surgery</option>
			<option name='name' value="Hematology"  @if($data->name=='Hematology') selected @endif>Hematology</option>
			<option name='name' value="Neurology"  @if($data->name=='Neurology') selected @endif>Neurology</option>
			<option name='name' value="Oncology"  @if($data->name=='Oncology') selected @endif>Oncology</option>
			
			<option name='name' value="Ophthalmology"  @if($data->name=='Ophthalmology') selected @endif>Ophthalmology</option>
			<option name='name' value="Urology"  @if($data->name=='Urology') selected @endif>Urology</option>
			
			
			 
		</select>

	<div class="form-group">
	<label style="font-family: sans-serif; font-weight: bold; font-size:18px;">Description</label>
	<textarea style="font-family: sans-serif;  font-size:18px;" class="form-control" name="description">{{$data->description}}</textarea>
	</div>

<button style="font-family: sans-serif; font-size:18px; color: blACK;" class="btn btn-success">Update</button>
	</form>
</div>

@include('dash.footer')