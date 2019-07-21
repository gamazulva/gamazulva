<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KandidatController extends Controller
{
public function index()
    {
    	// mengambil data dari table kandidat
    	$kandidat = DB::table('kandidat')->get();
 
    	// mengirim data kandidat ke view index
    	return view('kandidat.index',['kandidat' => $kandidat]);
 
    }
		
	public function tambah()
    {
    	// mengirim data Partai ke view index
    	return view('kandidat.tambah');
 
    }
	
	public function store(Request $request)
	{
		// insert data ke table Partai
		DB::table('kandidat')->insert([
			'nama_ketua' => $request->nama_ketua,
			'nama_wakil' => $request->nama_wakil,
			'nomor_urut' => $request->nomor_urut,
			'foto' => $request->foto,
			'foto2' => $request->foto2,
			'id_voting' => $request->id_voting,
			'id_partai' => $request->id_partai
		]);
		// alihkan halaman ke halaman kandidat
		return redirect('/kandidat');
	}
	
	public function edit($id_kandidat)
	{
		// mengambil data kandidat berdasarkan id_kandidat yang dipilih
		$kandidat = DB::table('kandidat')->where('id_kandidat',$id_kandidat)->get();
		// passing data kandidat yang didapat ke view edit.blade.php
		return view('kandidat.edit',['kandidat' => $kandidat]);
	 
	}
	
	public function update(Request $request)
	{
		// update data kandidat
		DB::table('kandidat')->where('id_kandidat',$request->id_kandidat)->update([
			'nama_ketua' => $request->nama_ketua,
			'nama_wakil' => $request->nama_wakil,
			'nomor_urut' => $request->nomor_urut,
			'foto' => $request->foto,
			'foto2' => $request->foto2,
			'id_voting' => $request->id_voting,
			'id_partai' => $request->id_partai
		]);
		// alihkan halaman ke halaman kandidat
		return redirect('/kandidat');
	}
	
	public function hapus($id_kandidat)
	{
		// menghapus data kandidat berdasarkan id yang dipilih
		DB::table('kandidat')->where('id_kandidat',$id_kandidat)->delete();
			
		// alihkan halaman ke halaman kandidat
		return redirect('/kandidat');
	}
}
