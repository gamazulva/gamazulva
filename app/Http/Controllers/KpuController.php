<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KpuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kpu
    	$kpu = DB::table('kpu')->get();
 
    	// mengirim data kpu ke view index
    	return view('kpu.index',['kpu' => $kpu]);
 
    }
		
	public function tambah()
    {
    	// mengirim data Kpu ke view index
    	return view('kpu.tambah');
 
    }
	
	public function store(Request $request)
	{
		// insert data ke table Kpu
		DB::table('kpu')->insert([
			'no_id_kpu' => $request->no_id_kpu,
			'nama' => $request->nama,
			'id_divisi_kpu' => $request->id_divisi_kpu,
			'id_login' => $request->id_login,
		]);
		// alihkan halaman ke halaman Kpu
		return redirect('/kpu');
	}
	
	public function edit($id_kpu)
	{
		// mengambil data kpu berdasarkan id_kpu yang dipilih
		$kpu = DB::table('kpu')->where('id_kpu',$id_kpu)->get();
		// passing data kpu yang didapat ke view edit.blade.php
		return view('kpu.edit',['kpu' => $kpu]);
	 
	}
	
	public function update(Request $request)
	{
		// update data kpu
		DB::table('kpu')->where('id_kpu',$request->id_kpu)->update([
			'no_id_kpu' => $request->no_id_kpu,
			'nama' => $request->nama,
			'id_divisi_kpu' => $request->id_kpu_kpu,
			'id_login' => $request->id_login
		]);
		// alihkan halaman ke halaman kpu
		return redirect('/kpu');
	}
	
	public function hapus($id_kpu)
	{
		// menghapus data kpu berdasarkan id yang dipilih
		DB::table('kpu')->where('id_kpu',$id_kpu)->delete();
			
		// alihkan halaman ke halaman kpu
		return redirect('/kpu');
	}
}
