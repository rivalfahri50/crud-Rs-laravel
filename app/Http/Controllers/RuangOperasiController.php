<?php

namespace App\Http\Controllers;

use App\Models\RuangOperasi;
use Illuminate\Http\Request;

class RuangOperasiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ruang_operasis = RuangOperasi::where('no_ruang','LIKE','%' .$request->search.'%')->paginate(4);
            $ruang_operasis->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
            $ruang_operasis = RuangOperasi::paginate(4);
           }
            return view('ruang_operasi.index' , compact('ruang_operasis'));
    }

    public function create()
    {
        return view ('ruang_operasi.create');
    }

    public function store(Request $request)
    {
       $this->validate($request , [
        'no_ruang'=>'required|unique:ruang_operasis',
        'status'=>'required',
        'nama_dokter'=>'required',
        'nama_pasien'=>'required',
        'nama_alat'=>'required',



       ],[
        'no_ruang.unique'=>'no sudah terpakai',
        'no_ruang.required'=>'no harus di isi',
        'status.required'=>'status harus dipilih',
        'nama_dokter.required'=>'nama dokter harus dipilih',
        'nama_pasien.required'=>'nama pasien harus dipilih',
        'nama_alat.required'=>'nama alat harus dipilih',
        ]);
       RuangOperasi::create([
        'no_ruang'=>$request->no_ruang,
        'status'=>$request->status,
        'nama_dokter'=>$request->nama_dokter,
        'nama_pasien'=>$request->nama_pasien,
        'nama_alat'=>$request->nama_alat,
        ]);


       return redirect()->route('ruang_operasi.index')->with('success','Data Berhasil Terkirim');
    }

    public function edit(RuangOperasi $ruang_operasi)
    {
        return view('ruang_operasi.edit', compact('ruang_operasi'));
    }
    public function update(Request $request, RuangOperasi $ruang_operasi)
    {

        $this->validate($request,[
          'no_ruang'=>'required',
          'status'=>'required',
          'nama_dokter'=>'required',
          'nama_pasien'=>'required',
          'nama_alat'=>'required',
        ],[
     
            'no_ruang.required'=>'no harus di isi',
            'status.required'=>'status harus dipilih',
            'nama_dokter.required'=>'nama dokter harus dipilih',
            'nama_pasien.required'=>'nama pasien harus dipilih',
            'nama_alat.required'=>'nama alat harus dipilih',
            ]);
            $ruang_operasi->update([
               'no_ruang'=>$request->no_ruang,
               'status'=>$request->status,
               'nama_dokter'=>$request->nama_dokter,
               'nama_pasien'=>$request->nama_pasien,
               'nama_alat'=>$request->nama_alat,
            ]);
        return redirect()->route('ruang_operasi.index')->with('update' ,'Data berhasil Di ubah!');
    }

    public function destroy(RuangOperasi $ruang_operasi)
    {
        $ruang_operasi->delete();
        return  redirect()->route('ruang_operasi.index');
    }


}
