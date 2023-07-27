<?php

namespace App\Http\Controllers;

use App\Models\Jadwal_Dokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $jadwal__dokters = Jadwal_Dokter::where('nama_dokter','LIKE','%' .$request->search.'%')->paginate(4);
           $jadwal__dokters->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
           $jadwal__dokters = Jadwal_Dokter::paginate(4);
           }
            return view('jadwal_dokter.index' , compact('jadwal__dokters'));
    }

    public function create()
    {
        return view ('jadwal_dokter.create');
    }

    public function store(Request $request)
    {
       $this->validate($request ,[
        'nama_dokter'=>'required',
        'tanggal'=>'required|date_format:Y-m-d',
        'ruang'=>'required|unique:jadwal__dokters',
        'nama_pasien'=>'required',
       ]);
       $tanggal_formatted = date('d-m-Y', strtotime($request->tanggal));
       Jadwal_Dokter::create([
        'nama_dokter'=>$request->nama_dokter,
        'tanggal'=>$tanggal_formatted,
        'ruang'=>$request->ruang,
        'nama_pasien'=>$request->nama_pasien,

       ],[
            'ruang.unique'=>'ruang sedang di pakai',
            'nama_dokter.required'=>'Nama harus di isi',
            'tanggal.date_formatted'=>'tanggal harus dipilih',
            'ruang.required'=>'ruang harus diisi',
            'nama_pasien.required'=>'Nama harus di isi',

       ]);


       return redirect()->route('jadwal_dokter.index')->with('success','Data Berhasil Terkirim');
    }

    public function edit(Jadwal_Dokter $jadwal_dokter)
    {
        return view('jadwal_dokter.edit', compact('jadwal_dokter'));
    }
    public function update(Request $request, Jadwal_Dokter $jadwal_dokter)
    {
        $this->validate($request,[
        'nama_dokter'=>'required',
        'tanggal'=>'required|date_format:Y-m-d',
        'ruang'=>'required|unique:jadwal__dokters',
        'nama_pasien'=>'required',
        ],[
            'ruang.unique'=>'ruang sedang di pakai',
            'nama_dokter.required'=>'Nama harus di isi',
            'tanggal.date_formatted'=>'tanggal harus dipilih',
            'ruang.required'=>'ruang harus diisi',
            'nama_pasien.required'=>'Nama harus di isi',
        ]);
        $tanggal_formatted = date('d-m-Y', strtotime($request->tanggal));
        $jadwal_dokter->update([
                'nama_dokter'=>$request->nama_dokter,
                'tanggal'=>$tanggal_formatted,
                'ruang'=>$request->ruang,
                'nama_pasien'=>$request->nama_pasien,

            ]);

        return redirect()->route('jadwal_dokter.index')->with('update' ,'Data berhasil Di ubah!');
    }

    public function destroy(Jadwal_Dokter $jadwal_dokter)
    {
        $jadwal_dokter->delete();
        return  redirect()->route('jadwal_dokter.index');
    }
}


