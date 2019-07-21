<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
	
class PartaiController extends Controller
{
	public function index()
    {
    	// mengambil data dari table partai
    	$partai = DB::table('partai')->get();
 
    	// mengirim data partai ke view index
    	return view('partai.index',['partai' => $partai]);
 
    }
		
	public function tambah()
    {
    	// mengirim data Partai ke view index
    	return view('partai.tambah');
 
    }
	
	public function store(Request $request)
	{
		// insert data ke table Partai
		DB::table('partai')->insert([
			'nama_partai' => $request->nama_partai,
			'foto' => $request->foto,
			'keterangan' => $request->keterangan
		]);
		// alihkan halaman ke halaman partai
		return redirect('/partai');
	}
	
	public function edit($id_partai)
	{
		// mengambil data partai berdasarkan id_partai yang dipilih
		$partai = DB::table('partai')->where('id_partai',$id_partai)->get();
		// passing data partai yang didapat ke view edit.blade.php
		return view('partai.edit',['partai' => $partai]);
	 
	}
	
	public function update(Request $request)
	{
		// update data partai
		DB::table('partai')->where('id_partai',$request->id_partai)->update([
			'nama_partai' => $request->nama_partai,
			'foto' => $request->foto,
			'keterangan' => $request->keterangan
		]);
		// alihkan halaman ke halaman partai
		return redirect('/partai');
	}
	
	public function hapus($id_partai)
	{
		// menghapus data partai berdasarkan id yang dipilih
		DB::table('partai')->where('id_partai',$id_partai)->delete();
			
		// alihkan halaman ke halaman partai
		return redirect('/partai');
	}
}
