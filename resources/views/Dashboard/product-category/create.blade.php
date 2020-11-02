@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Create Product Catregory</h3>
	<form method="POST" action="{{route('product-category.store')}}">
	
	{{ csrf_field() }}

	<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control " name="name" >
	</div>

	<div class="form-group">
	<label>Description</label>
	<textarea  class="form-control" name="description"></textarea>
	</div>
	<button class="btn btn-success">Create</button>
	</form>
</div>

@include('dashboard.footer')