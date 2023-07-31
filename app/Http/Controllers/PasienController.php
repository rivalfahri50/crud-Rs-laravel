<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\pasien;
use App\Models\no_antrian;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request->has('search')) {
        $pasiens = pasien::where('nama','LIKE','%' .$request->search.'%')->paginate(4);
        $pasiens->appends(['search' => $request->search]);
        session(['search' => $request->search]);
       }else {
        $pasiens = pasien::paginate(4);
       }
        return view('pasien.index' , compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $no_antrians = no_antrian::all();
     return view ('pasien.create', compact('no_antrians'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'nama'=>'required',
            'antrian_id'=>'required|unique:pasiens,antrian_id',
            'keluhan'=>'required',
           ],[
            'nama.required'=>'Nama harus di isi',
            'antrian_id.required'=>'no harus diisi',
            'antrian_id.unique'=>'Kode telah terdaftar',
            'keluhan.required'=>'Keluhan harus di isi',
           ]);
           pasien::create([
            'nama'=>$request->nama,
            'antrian_id'=>$request->antrian_id,
            'keluhan'=>$request->keluhan,

           ]);
           Alert::success('Berhasil', 'berhasil menambah data!');
           return redirect()->route('pasien.index')->with('success','Data Berhasil Terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        $antrians = no_antrian::all();
        return view ('pasien.edit', compact('pasien','antrians'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepasienRequest  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pasien $pasien)
    {
        $this->validate($request,[
            'nama'=>'required',
            'antrian_id'=>'required|unique:pasiens,antrian_id,'.$pasien->antrian_id ,
            'keluhan'=>'required',
        ],[
            'nama.required'=>'Nama harus di isi',
            'antrian_id.required'=>'no harus diisi',
            'antrian_id.unique'=>'Kode telah terdaftar',
            'keluhan.required'=>'Keluhan harus di isi',
           ]);

            $pasien->update([
                'nama'=>$request->nama,
                'antrian_id'=>$request->antrian_id,
                'keluhan'=>$request->keluhan,
            ]);
            Alert::success('Berhasil', 'berhasil merubah data!');
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        try {
            $pasien->delete();
            return  redirect()->route('pasien.index')->with('successhapus','berhasil menghapus');
        }
        catch (QueryException $e) {
            return back()->withErrors(['pasienerror' => 'Data ini masih digunakan']);
        }
    }
}
