@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Kopi</h3>

	<a href="/kopi"> Kembali</a>

	<br/>
	<br/>

	@foreach($kopi as $k)
	<form action="/kopi/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="KodeKopi" value="{{ $k->kodekopi }}"> <br/>
		MerkKopi <input type="text" required="required" name="MerkKopi" value="{{ $k->merkkopi }}"> <br/>
		StockKopi <input type="number" required="required" name="StockKopi" value="{{ $k->stockkopi }}"> <br/>
		Tersedia <input type="text" required="required" name="Tersedia" value="{{ $k->tersedia }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
@endsection