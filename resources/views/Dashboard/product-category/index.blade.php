@include('dashboard.header');
<div class="container">
@if(session()->has('status'))
  <div class="alert alert-success">
    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
    {{ session()->get('status') }}
  </div>
  @endif
  <h1 class="mt-3 mb-3">Product Category</h1>
  <small>
  	<a href="{{route('product-category.create')}}" class="btn btn-primary float-right">Create</a>
  </small>
       
  <table class="table">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @php $i=1; @endphp
     @foreach($data as $key=>$d)
      <tr>
        <td scope="row">{{$data->firstItem()+$key}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->description}}</td>
        <td>
        <a href="{{route('product-category.edit', $d->id)}}" class="btn btn-info">Edit</a>
         
         <form action="{{route('product-category.destroy',$d->id)}} " method="POST" class="d-inline"> 
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