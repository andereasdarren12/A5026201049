<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KopiController extends Controller
{
    //
    public function index()
    {
        $kopi = DB::table('kopi')->paginate(5) ;
    	return view('kopi.index',['kopi' => $kopi]);

    }

    public function tambah() {
        
        return view('kopi.tambah');
    }

    public function store(Request $request) {

    DB::table('kopi')->insert([
		'kodekopi' => $request->kodekopi,
		'merkkopi' => $request->merkkopi,
		'jumlahkopi' => $request->jumlahkopi,
		'tersedia' => $request->tersedia
	]);
    return redirect('/kopi');
    }

    public function edit($id) {
        $kopi = DB::table('kopi')->where('kodekopi', $id)->get();

        return view('kopi.edit', ['kopi' => $kopi]);
    }

    public function update(Request $request) {
        DB::table('kopi')->where('kodekopi', $request->id)->update([

            'merkkopi' => $request->merkkopi,
            'jumlahkopi' => $request->jumlahkopi,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kopi');
    }

    public function hapus($id) {

	DB::table('kopi')->where('kodekopi',$id)->delete();

	return redirect('/kopi');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$kopi = DB::table('kopi')
		->where('merkkopi','like',"%".$cari."%")
        ->orWhere('tersedia', 'like', "%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('kopi.index',['kopi' => $kopi]);

	}


    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kopi = DB::table('kopi')->where('kodekopi', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('kopi.detail', ['kopi' => $kopi]);
    }
}
