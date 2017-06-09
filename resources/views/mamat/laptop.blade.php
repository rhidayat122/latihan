<!DOCTYPE html>
<html>
<head>
	<title>Laptop</title>
</head>
<body>
<h1>Daftar Laptop : </h1>
@foreach ($laptop as $datas)
<b><li> {{ $datas }}</li></b>
@endforeach

</table>
</body>
</html>