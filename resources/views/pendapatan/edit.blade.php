@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		ID <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		NRP <input type="number" required="required" name="Bulan" value="{{ $p->Bulan }}"> <br/>
		NilaiKuliah <input type="text" required="required" name="Tahun" value="{{ $p->Tahun }}"> <br/>
		SKS <input type="number" required name="Gaji" value="{{ $p->Gaji }}"> <br/>
        Bobot Nilai <input type="number" required name="Tunjangan" value="{{ $p->Tunjangan }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
@endsection