<!DOCTYPE html>
<html>
<head>
	<title>Binatang</title>
</head>
<body>
<h3>Buah</h3>

 <table border="1">
   <tr>
   @foreach($buah as $data)
    <td>{{$data}}</td>
   @endforeach
  </tr>
  </table>

<h3>Komputer</h3>
  <table border="1">
   <tr>
   @foreach($laptop as $data)
    <td>{{$data}}</td>
   @endforeach
  </tr>
  </table>

<h3>Binatang</h3>
  <table border="1">
   <tr>
   @foreach($binatang as $data)
    <td>{{$data}}</td>
   @endforeach
   </tr>
   </table>
</table>
</body>
</html>