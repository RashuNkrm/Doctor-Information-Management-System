<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('resources/css/Headcss.css')}}">
   
   
	<script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}" ></script>

</head>
<h3 style="margin-top:20px; margin-bottom: -20px; margin-left: 30px; color: teal;">Doctor Recording System</h3>

<body style="background-image: url({{asset('/images/hospital.jpg')}});  background-repeat: none; background-size: cover; height:100%; width: 100%; ">
 
<!-- <div class="collapse navbar-collapse" >
 -->  <ul style="list-style-type: none; margin-top:50px; padding-top: 20px; ">

    <li style= 'float: left; width: 15%;'>
         <a href="{{route('admin1.doctor')}}">Doctor</a>
      </li>

      <li style= 'float: left; width: 15%; color: black;'>
        <a  href="{{route('admin1.schedule')}}">Schedule </a>
      </li>
      <li style= 'float: left; width: 15%;'>
        <a  href="{{route('admin1.department')}}">Department</a>
      </li>
   
       <li style= 'float: left; width: 15%;'>
        <a href="javascript:void(0)" onclick="$('#logout-form').submit();">Logout</a>
        </li> 
     
      </ul>
    
    
  
   

<form id="logout-form" action="{{route('logout')}}" method="POST" class="d-done">
       {{ csrf_field() }}
</form>

