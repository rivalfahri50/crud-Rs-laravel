<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $kunjungans = Kunjungan::where('nama_pengunjung','LIKE','%' .$request->search.'%')->paginate(4);
           $kunjungans->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
           $kunjungans = Kunjungan::paginate(4);
           }
            return view('kunjungan.index' , compact('kunjungans'));
    }

    public function create()
    {
        return view ('kunjungan.create');
    }

    public function store(Request $request)
    {
       $this->validate($request ,[
        'nama_pengunjung'=>'required',
        'nama_pasien'=>'required',
        'tanggal'=>'required|date_format:Y-m-d',
        'ruang'=>'required',
       ]);
       $tanggal_formatted = date('d-m-Y', strtotime($request->tanggal));
       Kunjungan::create([
    'nama_pasien'=>$request->nama_pasien,
    'nama_pengunjung'=>$request->nama_pengunjung,
    'tanggal'=>$tanggal_formatted,
    'ruang'=>$request->ruang,

       ],[
        'nama_pengunjung.required'=>'Nama harus di isi',
        'nama_pasien.required'=>'Nama harus di isi',
        'tanggal.required'=>'tanggal harus dipilih',
        'ruang.required'=>'ruang harus diisi',

       ]);


       return redirect()->route('kunjungan.index')->with('success','Data Berhasil Terkirim');
    }
    
    public function edit(Kunjungan $kunjungan)
    {
        return view('kunjungan.edit', compact('kunjungan'));
    }
    public function update(Request $request, Kunjungan $kunjungan)
    {
        $this->validate($request,[
        'nama_pengunjung'=>'required',
        'nama_pasien'=>'required',
        'tanggal'=>'required|date_format:Y-m-d',
        'ruang'=>'required',
        ],[
            'nama_pengunjung.required'=>'Nama harus di isi',
            'nama_pasien.required'=>'Nama harus di isi',
            'tanggal.date_formatted'=>'tanggal harus dipilih',
            'ruang.required'=>'ruang harus diisi',
     
        ]);
        $tanggal_formatted = date('d-m-Y', strtotime($request->tanggal));
        $kunjungan->update([
                'nama_pengunjung'=>$request->nama_pengunjung,
                'nama_pasien'=>$request->nama_pasien,
                'tanggal'=>$tanggal_formatted,
                'ruang'=>$request->ruang,
        
            ]);

        return redirect()->route('kunjungan.index')->with('update' ,'Data berhasil Di ubah!');
    }

    public function destroy(Kunjungan $kunjungan)
    {
        $kunjungan->delete();
        return  redirect()->route('kunjungan.index');
    }
}
