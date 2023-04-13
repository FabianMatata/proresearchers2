
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1px">

	<tr>
		<th>Name</th>
		<th>Description</th>
		<th>subject</th>
		<th>level</th>
		<th>View</th>
		<th>Download</th>
	</tr>

	@foreach($data as $data)

	<tr>
		<td>{{$data->name}}</td>
		<td>{{$data->description}}</td>
		<td>{{$data->subject}}</td>
		<td>{{$data->level}}</td>

		<td><a href="{{url('/view',$data->id)}}">View</a></td>
		<td><a href="{{url('/download',$data->file)}}">Download</a></td>


	</tr>
	



	@endforeach

	</table>

</body>
</html>