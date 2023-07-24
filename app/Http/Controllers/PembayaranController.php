<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pembayarans = Pembayaran::where('nama_pasien','LIKE','%' .$request->search.'%')->paginate(4);
           $pembayarans->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
           $pembayarans = Pembayaran::paginate(4);
           }
            return view('pembayaran.index' , compact('pembayarans'));
    }

    public function create()
    {
        return view ('pembayaran.create');
    }

    public function store(Request $request)
    {
       $this->validate($request , [
        'nama_pasien'=>'required',
        'nama_dokter'=>'required',
        'obat'=>'required',
        'jumlah_obat'=>'required',
        'ruang'=>'required',


       ],[
        'nama_pasien.required'=>'Nama harus di isi',
        'nama_dokter.required'=>'Nama harus di isi',
        'obat.required'=>'obat harus dipilih',
        'jumlah_obat.required'=>'jumlah_obat harus diisi',
        'ruang.required'=>'ruang harus diisi',


       ]);
       Pembayaran::create([
        'nama_pasien'=>$request->nama_pasien,
        'nama_dokter'=>$request->nama_dokter,
        'obat'=>$request->obat,
        'jumlah_obat'=>$request->jumlah_obat,
        'ruang'=>$request->ruang,


       ]);


       return redirect()->route('pembayaran.index')->with('success','Data Berhasil Terkirim');
    }
    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayaran.edit', compact('pembayaran'));
    }
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $this->validate($request,[
            'nama_pasien'=>'required',
        'nama_dokter'=>'required',
        'obat'=>'required',
        'jumlah_obat'=>'required',
        'ruang'=>'required',
        ]);
            $pembayaran->update([
                'nama_pasien'=>$request->nama_pasien,
                'nama_dokter'=>$request->nama_dokter,
                'obat'=>$request->obat,
                'jumlah_obat'=>$request->jumlah_obat,
                'ruang'=>$request->ruang,
            ]);
        return redirect()->route('pembayaran.index')->with('update' ,'Data berhasil Di ubah!');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return  redirect()->route('pembayaran.index');
    }
}
