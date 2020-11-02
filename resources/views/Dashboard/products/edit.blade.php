@include('dashboard.header')

<div class="mt-3 mb-3">
<div class="container">
	<h3>Create Products</h3>
	<form method="POST" action="{{route('products.update',$data->id)}}" enctype="multipart/form-data">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}



	<div class="form-group" >
		<label>Select Category</label>
		<select name="category_id" class="form-control">
			<option value="0"></option>
			@foreach($category as $value)
			<option value="{{$value->id}}" @if($value->id==$data->category_id) selected @endif>{{$value->name}}</option>
			@endforeach
			</select>
	</div>


	<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control " name="name" value="{{$data->name}}">
	</div>


	<div class="form-group col-md-4">
	<label>Upload Image</label><br>
	<input type="file" name="image" required="">
	<input type="hidden" name="image_url" value="{{$data->image}}">
	@if($data->image)
         <img src="{{asset($data->image)}}" height="50" width="50">
         @endif
</div>

	<div class="form-group">
	<label>Description</label>
	<textarea  class="form-control" name="description">{{$data->description}}</textarea>
	</div>

	<div class="form-group">
	<label>Price</label>
	<input type="text" class="form-control " name="price" value="{{$data->price}}" >
	</div>

	<div class="form-group">
	<label>Quantity</label>
	<input type="text" class="form-control " name="quantity" value="{{$data->quantity}}" >
	</div>

	
	<button class="btn btn-success">Update</button>
	</form>
</div>

@include('dashboard.footer')