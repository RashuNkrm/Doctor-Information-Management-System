@include('dash.header')
<div class="container"><br><br>
@if(session()->has('status'))
  <div class="alert alert-success">
    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
    {{ session()->get('status') }}
  </div>
  @endif

<div class="container"><br><br>
  <h3 class="mt-3 mb-3" style="color: red; text-align: left;">Schedule Information</h3>
  <small>
  	<a href="{{route('schedule.create')}}" class="btn btn-primary float-right">Create</a>
  </small>
       
  <table class="table">
    <thead style="font-size: 19px; font-weight: bold;">
      <tr>
        <th>S.N</th>
        <th>Schedule Date</th>
        <th>Schedule Time</th>
        <th>Schedule Day</th>
        <th>Department</th>
        
        <th>Action</th>

      </tr>
    </thead>
    <tbody style="font-size:18px; font-family: sans-serif;">
    @php $i=1; @endphp
     @foreach($data as $key=>$d)
      <tr>
        <td scope="row">{{$data->firstItem()+$key}}</td>
        <td>{{date('M d, Y',strtotime($d->schedule_date))}}</td>
         <td>{{$d->schedule_time}} </td>
          <td>{{$d->schedule_day}}</td>
          <td>{{$d->department['name']}}</td>


        
           


        <td>
        <a href="{{route('schedule.edit', $d->id)}}" class="btn btn-info">Edit</a>
         
         <form action="{{route('schedule.destroy',$d->id)}} " method="POST" class="d-inline"> 
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