<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Nama : </h1>
@foreach ($a as $datas)
<b><li> {{ $datas }}</li></b>
@endforeach
</body>
</html>