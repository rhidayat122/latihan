<!DOCTYPE html>
<html>
<head>
	<title>Pilihan</title>
</head>
<body>

Daftar : <b>{{$pilih}} {{$jenis}}</b> 
   @foreach($baru as $data)
    <li>{{$data}}</li>
   @endforeach

</body>
</html>