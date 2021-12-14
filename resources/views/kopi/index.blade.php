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

	<a href="/kopi/tambah"> + Tambah Kopi Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>KodeKopi</th>
			<th>MerkKopi</th>
			<th>StockKopi</th>
			<th>Tersedia</th>
		</tr>
		@foreach($kopi as $k)
		<tr>
			<td>{{ $k->kodekopi }}</td>
            <td>{{ $k->merkkopi }}</td>
			<td>{{ $k->stockkopi }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
				<a href="/kopi/edit/{{ $p->kodekopi}}">Edit</a>
				|
				<a href="/kopi/hapus/{{ $p->kodekopi}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection