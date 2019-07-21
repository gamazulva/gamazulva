<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table petugas
    	$petugas = DB::table('petugas')->get();
 
    	// mengirim data petugas ke view index
    	return view('petugas.index',['petugas' => $petugas]);
 
    }
		
	public function tambah()
    {
    	// mengirim data Kpu ke view index
    	return view('petugas.tambah');
 
    }
	
	public function store(Request $request)
	{
		// insert data ke table Kpu
		DB::table('petugas')->insert([
			'no_petugas' => $request->no_petugas,
			'no_ktp' => $request->no_ktp,
			'id_divisi_petugas' => $request->id_divisi_petugas,
			'id_tps' => $request->id_tps,
			'id_login' => $request->id_login
		]);
		// alihkan halaman ke halaman petugas
		return redirect('/petugas');
	}
	
	public function edit($id_petugas)
	{
		// mengambil data petugas berdasarkan id_petugas yang dipilih
		$petugas = DB::table('petugas')->where('id_petugas',$id_petugas)->get();
		// passing data petugas yang didapat ke view edit.blade.php
		return view('petugas.edit',['petugas' => $petugas]);
	 
	}
	
	public function update(Request $request)
	{
		// update data petugas
		DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
			'no_petugas' => $request->no_petugas,
			'no_ktp' => $request->no_ktp,
			'id_divisi_petugas' => $request->id_petugas_petugas,
			'id_tps' => $request->id_tps,
			'id_login' => $request->id_login
		]);
		// alihkan halaman ke halaman petugas
		return redirect('/petugas');
	}
	
	public function hapus($id_petugas)
	{
		// menghapus data petugas berdasarkan id yang dipilih
		DB::table('petugas')->where('id_petugas',$id_petugas)->delete();
			
		// alihkan halaman ke halaman petugas
		return redirect('/petugas');
	}
}
