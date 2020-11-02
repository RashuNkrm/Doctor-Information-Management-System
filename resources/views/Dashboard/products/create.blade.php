@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Create Products</h3>
	<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}


	
	<div class="form-group ">
	<label>Name</label>
	<input type="text" class="form-control " name="name" required="">
	</div>

	<div class="form-group col-md-4">
	<label>Upload Image</label><br>
	<input type="file" name="image" required="">
	</div>

	<div class="form-group">
	<label>Description</label>
	<textarea  class="form-control" name="description" required=""></textarea>
	</div>

	<div class="form-group">
	<label>Price</label>
	<input type="number" class="form-control " name="price" required="" >
	</div>

	<div class="form-group">
	<label>Quantity</label>
	<input type="number" class="form-control " name="quantity" required="" >
	</div>

	<div class="form-group" >
		<label>Select Category</label>
		<select name="category_id" class="form-control" required="">
			<option value="0"></option>
			@foreach($data as $value)
			<option value="{{$value->id}}">{{$value->name}}</option>
			@endforeach
			</select>
	</div>

	<button class="btn btn-success">Create</button>
	</form>
</div>

@include('dashboard.footer')