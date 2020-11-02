<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}" ></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
