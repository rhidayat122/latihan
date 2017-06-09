<!DOCTYPE html>
<html>
<head>
	<title>Kendaraan</title>
</head>
<body>
<h1>Daftar Kendaraan : </h1>
@foreach ($kendaraan as $datas)
<b><li> {{ $datas }}</li></b>
@endforeach

</table>
</body>
</html>