<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satpam;

class SatpamController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $satpams = Satpam::where('nama','LIKE','%' .$request->search.'%')->paginate(4);
            $satpams->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
            $satpams = Satpam::paginate(4);
           }
            return view('satpam.index' , compact('satpams'));
    }

    public function create()
    {
        return view ('satpam.create');
    }

    public function store(Request $request)
    {
       $this->validate($request , [
        'nama'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|min:12',
        'umur'=>'required',


       ],[
        'nama.required'=>'Nama harus di isi',
        'alamat.required'=>'jenis kelamin harus dipilih',
        'no_hp'=>'no hp harus',


       ]);
       Satpam::create([
        'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'umur'=>$request->umur,


       ]);


       return redirect()->route('satpam.index')->with('success','Data Berhasil Terkirim');
    }

    public function edit(Satpam $satpam)
    {
        return view('satpam.edit', compact('satpam'));
    }
    public function update(Request $request, Satpam $satpam)
    {
        $this->validate($request,[
            'nama'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|min:12',
        'umur'=>'required',
        ]);
            $satpam->update([
                'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'umur'=>$request->umur,
            ]);
        return redirect()->route('satpam.index')->with('update' ,'Data berhasil Di ubah!');
    }

    public function destroy(Satpam $satpam)
    {
        $satpam->delete();
        return  redirect()->route('satpam.index');
    }

    
}
