@include('dash.header')
<div class="container"><br><br>
@if(session()->has('status'))
  <div class="alert alert-success">
    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
    {{ session()->get('status') }}
  </div>
  @endif
<div class="container"><br><br>
  <h3  style="text-align: left; color: red;" >Doctor Information</h3>
  <small>
  	<a href="{{route('doctor.create')}}" class="btn btn-primary float-right">Create</a>
  </small>
       
  <table class="table">
    <thead style="font-size: 17px; ">
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>

        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Date of Registration</th>
        <th>Department</th>
        
        <th>Action</th>

      </tr>
    </thead>
    <tbody style="font-size:18px; font-family: sans-serif;">
    @php $i=1; @endphp
     @foreach($data as $key=>$d)
      <tr>
        <td scope="row">{{$data->firstItem()+$key}}</td>
        <td>{{$d->name}}</td>
         <td>{{$d->gender}}</td>
        
        <td>{{$d->address}}</td>
         <td>{{$d->phone}}</td>
          <td>{{date('M d, Y',strtotime($d->dob))}}</td>
           <td>{{date('M d, Y',strtotime($d->created_at))}}</td>
           <td>{{$d->department['name']}}</td>
            


        <td>
        <a href="{{route('doctor.edit', $d->id)}}" class="btn btn-info">Edit</a>
         
         <form action="{{route('doctor.destroy',$d->id)}} " method="POST" class="d-inline"> 
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