<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th> Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Created date</th>

			</tr>
		</thead>

		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{$d->id}}</td>
				<td>{{$d->name}}</td>
				<td>{{$d->image}}</td>

				<td>{{$d->price}}</td>
				<td>{{$d->quantity}}</td>
				<td>{{date('M d,Y',strtotime($d->created_at))}}</td>
			</tr>
			@endforeach
		</tbody>
</table>

</body>
</html>