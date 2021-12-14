@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')

<html>
<head>
	<title>Praktikum3</title>
</head>
<body>

	<h3>Data Kopi</h3>

	<a href="/kopi"> Kembali</a>

	<br/>
	<br/>

	<form action="/kopi/store" method="post">
		{{ csrf_field() }}
		KodeKopi <input type="number" name="KodeKopi" required="required"> <br/>
		MerkKopi <input type="text" name="MerkKopi" required="required"> <br/>
		StockKopi <input type="number" name="StockKopi" required="required"> <br/>
        Tersedia <input type="text" name="Tersedia" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection
