@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Nilai Kuliah')
<html>
<head>
	<title>EAS</title>
</head>
<body>
	<h3>Data Nilai Kuliah</h3>

	<a href="/pendapatan/tambah"> + Tambah Nilai Kuliah</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>Nilai Huruf</th>
            <th>SKS</th>
            <th>Bobot Nilai</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID }}</td>
            <td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID}}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection