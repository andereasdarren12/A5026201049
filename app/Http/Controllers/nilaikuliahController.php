<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nilaikuliahController extends Controller
{
    public function index() {
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {
	return view('nilaikuliah.tambah');

    }

    public function store(Request $request)
    {

	DB::table('nilaikuliah')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan
	]);

	return redirect('/nilaikuliah');

    }

    public function edit($id)
    {

	$nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();

	return view('nilaikuliah.edit',['nilaikuliah' => $nilaikuliah]);

    }

    public function update(Request $request)
    {
	DB::table('nilaikuliah')->where('ID',$request->id)->update([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan
	]);
	return redirect('/nilaikuliah');
    }

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
    }
}