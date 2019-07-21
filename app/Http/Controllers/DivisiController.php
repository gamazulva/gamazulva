<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table divisi
    	$divisi = DB::table('divisi')->get();
 
    	// mengirim data divisi ke view index
    	return view('divisi.index',['divisi' => $divisi]);
 
    }
	
	public function tambah()
    {
    	// mengirim data divisi ke view index
    	return view('divisi.tambah');
 
    }
	
	public function store(Request $request)
	{
		// insert data ke table Divisi
		DB::table('divisi')->insert([
			'nama_divisi' => $request->nama_divisi,
			'segmen' => $request->segmen,
			'keterangan' => $request->keterangan,
		]);
		// alihkan halaman ke halaman divisi
		return redirect('/divisi');

	}
	
	public function edit($id_divisi)
	{
		// mengambil data divisi berdasarkan id_divisi yang dipilih
		$divisi = DB::table('divisi')->where('id_divisi',$id_divisi)->get();
		// passing data divisi yang didapat ke view edit.blade.php
		return view('divisi.edit',['divisi' => $divisi]);
	 
	}
	
	public function update(Request $request)
	{
		// update data divisi
		DB::table('divisi')->where('id_divisi',$request->id_divisi)->update([
			'nama_divisi' => $request->nama_divisi,
			'segmen' => $request->segmen,
			'keterangan' => $request->keterangan
		]);
		// alihkan halaman ke halaman divisi
		return redirect('/divisi');
	}
	
	public function hapus($id_divisi)
	{
		// menghapus data divisi berdasarkan id yang dipilih
		DB::table('divisi')->where('id_divisi',$id_divisi)->delete();
			
		// alihkan halaman ke halaman divisi
		return redirect('/divisi');
	}
}
