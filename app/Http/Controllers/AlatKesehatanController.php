<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Alat_Kesehatan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class AlatKesehatanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $alat__kesehatans = Alat_Kesehatan::where('nama_alat','LIKE','%' .$request->search.'%')->paginate(4);
            $alat__kesehatans->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
            $alat__kesehatans = Alat_Kesehatan::paginate(4);
           }
            return view('alat_kesehatan.index' , compact('alat__kesehatans'));
    }

    public function create()
    {
        return view ('alat_kesehatan.create');
    }

    public function store(Request $request)
    {
       $this->validate($request , [
        'nama_alat'=>'required',
        'jumlah_alat'=>'required',


       ],[
        'nama_alat.required'=>'nama_alat harus di isi',
        'jumlah_alat.required'=>'jenis kelamin harus dipilih',
       ]);
       Alat_Kesehatan::create([
        'nama_alat'=>$request->nama_alat,
        'jumlah_alat'=>$request->jumlah_alat,
        ]);

        Alert::success('Berhasil', 'berhasil menambah data!');
       return redirect()->route('alat_kesehatan.index')->with('success','Data Berhasil Terkirim');
    }

    public function edit(Alat_Kesehatan $alat_kesehatan)
    {
        return view('alat_kesehatan.edit', compact('alat_kesehatan'));
    }
    public function update(Request $request, Alat_Kesehatan $alat_kesehatan)
    {
        $this->validate($request,[
            'nama_alat'=>'required',
        'jumlah_alat'=>'required',
        ],[
            'nama_alat.required'=>'nama_alat harus di isi',
            'jumlah_alat.required'=>'jenis kelamin harus dipilih',
           ]);
            $alat_kesehatan->update([
                'nama_alat'=>$request->nama_alat,
        'jumlah_alat'=>$request->jumlah_alat,

            ]);
            Alert::success('Berhasil', 'berhasil menambah data!');
        return redirect()->route('alat_kesehatan.index');
    }

    public function destroy(Alat_Kesehatan $alat_kesehatan)
    {
        try {
            $alat_kesehatan->delete();
            return  redirect()->route('alat_kesehatan.index')->with('successhapus','berhasil menghapus');
        }
        catch (QueryException $e) {
            return back()->withErrors(['alaterror' => 'Data ini masih digunakan']);
        }
    }

}
