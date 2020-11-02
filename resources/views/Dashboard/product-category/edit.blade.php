@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Create Product Catregory</h3>
	<form method="POST" action="{{route('product-category.update',$data->id)}}">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control " name="name" value="{{$data->name}}">
	</div>

	<div class="form-group">
	<label>Description</label>
	<textarea  class="form-control" name="description">{{$data->description}}</textarea>
	</div>
	<button class="btn btn-success">Update</button>
	</form>
</div>

@include('dashboard.footer')