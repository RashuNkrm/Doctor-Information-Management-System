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
 -->  <ul style="list-style-type: none; margin-top:40px; padding-top: 20px; ">

   <li style= 'float: left; width: 15%;'>
         <a href="{{route('admin1.doctor')}}">Doctor</a>
      </li>
      
      <li style= 'float: left; width: 15%; color: black;'>
        <a  href="{{route('admin1.schedule')}}">Schedule </a>
      </li>
      <li style= 'float: left; width: 20%;'>
        <a  href="{{route('admin1.department')}}">Department</a>
      </li>
    

       <li style= 'float: left; width: 15%;'>
        <a href="javascript:void(0)" onclick="$('#logout-form').submit();">Logout</a>
        </li> 
     
      </ul>
     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>  -->
    
 
    
  
   

<form id="logout-form" action="{{route('logout')}}" method="POST" class="d-done">
       {{ csrf_field() }}
</form>

<div style="margin-top:100px; padding-top: 100px; padding-left: 35%;">
<!-- <table style='border: 2px solid black;
   padding: 50%; border-radius: 30px; ' >
<tr >
<th  style="padding: 40px; width:50%; text-align: center; font-size: 20px;">
  Welcome Admin
  </th>
  </tr>
</table> -->
<img src="welcome.jpg" style="width: 400px; margin-top: -20px; opacity: 85%;"><img src="login.jpg" style="width: 165px; margin-top: -20px; opacity: 85%;">
</div>