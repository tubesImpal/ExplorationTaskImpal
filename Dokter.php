<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dokter;

class DokterC extends Controller
{
 public function tambah()
    {
     return view('/dokter/tambah_dokter');
    }

    function simpan(Request $request)
 {
  $this->validate($request, [
   'spesialis' => 'required',
   'nama_dokter' => 'required'
  ]);

  $dokter = new dokter;
  $dokter->nama_dokter = $request->input('nama_dokter');
  $dokter->spesialis = $request->input('spesialis');
  $dokter->save();
  return redirect('/dokter')->with('response' , 'Tambah Dokter Berhasil');
    }
}
