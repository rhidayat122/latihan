<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>

	@if ($a == 1)
	Cucu Cahyati

	@else if ($a == 2)

	Cucu Ramdani

	@endif


	@for ($i = 0; $i < 10; $i++)
		Ini Angka ke {{$i+1}} <br>

    @endfor	
</body>
</html>


