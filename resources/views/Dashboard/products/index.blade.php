@include('dashboard.header');
<div class="container">
  <h1 class="mt-3 mb-3">Product Category</h1>
  <small>
  	<a href="{{route('products.create')}}" class="btn btn-primary float-right">Create</a>
  </small>
       
  <table class="table">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>

        <th>Price</th>
        <th>Quantity</th>
        <th>Created_at</th>
        <th>Category_name</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @php $i=1; @endphp
     @foreach($data as $key=>$d)
      <tr>
        <td scope="row">{{$data->firstItem()+$key}}</td>
        <td>{{$d->name}}</td>
         <td>
         @if($d->image)
         <img src="{{asset($d->image)}}" height="50" width="50">
         @endif</td>
        <td>{{$d->description}}</td>
         <td>{{$d->price}}</td>
          <td>{{$d->quantity}}</td>
           <td>{{$d->created_at}}</td>
            <td>{{$d->category->name}}</td>


        <td>
        <a href="{{route('products.edit', $d->id)}}" class="btn btn-info">Edit</a>
         
         <form action="{{route('products.destroy',$d->id)}} " method="POST" class="d-inline"> 
         	{{ csrf_field()}}
         	{{ method_field('DELETE')}}
         	<button type="submit" class="btn btn-danger">Delete</button>
         </form>

      </tr>
      @php $i++; @endphp
     @endforeach

    </tbody>
  </table>

  <div class="justify-content-center">
  	@if(class_basename($data) !== 'Collection')
  	{{ $data->links() }}
  	@endif
  </div>
</div>
@include('dashboard.footer');