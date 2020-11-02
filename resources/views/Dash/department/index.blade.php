@include('dash.header')
<div class="container"><br><br>
@if(session()->has('status'))
  <div class="alert alert-success">
    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
    {{ session()->get('status') }}
  </div>
  @endif
  <h3 class="mt-3 mb-3" style="color: red;">Department
  	<a href="{{route('department.create')}}" class="btn btn-primary float-right">Create</a>
  </small>
      </h3>
  <table class="table">
    <thead style="font-size: 19px; font-weight: bold;">
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Description</th>
        <!-- <th>Doctor Name</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody style="font-size:17px; font-family: sans-serif;">
    @php $i=1; @endphp
     @foreach($data as $key=>$d)
      <tr>
        <td scope="row">{{$data->firstItem()+$key}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->description}}</td>
       <!--  <td>{{$d->doctor['name']}}</td> -->
        <td>
        <a href="{{route('department.edit', $d->id)}}" class="btn btn-info">Edit</a>
         
         <form action="{{route('department.destroy',$d->id)}} " method="POST" class="d-inline"> 
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
@include('dash.footer')