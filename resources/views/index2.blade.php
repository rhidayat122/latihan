<!DOCTYPE html>
<html>
<head>
	<title>Sepakbola</title>
</head>
<body>
<center>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama</td>
		<td>Club</td>
		<td>Umur</td>
		<td>Negara</td>
	</tr>
@foreach ($tampilan as  $data)
	<tr>
		<td>{{ $data->id }}</td>
		<td>{{ $data->nama }}</td>
		<td>{{ $data->club }}</td>
		<td>{{ $data->umur }}</td>
		<td>{{ $data->negara }}</td>
		</tr>
		@endforeach
</table>
</body>
</html>