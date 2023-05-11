<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use App\Http\Requests\StorePerawatRequest;
use App\Http\Requests\UpdatePerawatRequest;
use Illuminate\Http\Request;
class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawats=Perawat::latest()->paginate(5);
        return view('perawat.index' , compact('perawats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('perawat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerawatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request , [
        'nama'=>'required',
        'jenis_kelamin'=>'required',
        'tgl_lahir'=>'required|date_format:Y-m-d',
       ],[
        'nama.required'=>'Nama harus di isi',
        'jenis_kelamin.required'=>'jenis kelamin harus di isi',
        'tgl_lahir.date_format'=>'tanggal lahir harus di isi',

       ]);
       $tgl_lahir_formatted = date('d-m-Y', strtotime($request->tgl_lahir));
       Perawat::create([
        'nama'=>$request->nama,
        'jenis_kelamin'=>$request->jenis_kelamin,
        'tgl_lahir'=>$tgl_lahir_formatted,

       ]);
       return redirect()->route('perawat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawat $perawat)
    {
        return view('perawat.edit', compact('perawat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerawatRequest  $request
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawat $perawat)
    {
        $this->validate($request,[
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required|date_format:Y-m-d',
        ]);
        $tgl_lahir_formatted = date('d-m-Y', strtotime($request->tgl_lahir));
            $perawat->update([
                'nama'=>$request->nama,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'tgl_lahir'=>$tgl_lahir_formatted,
            ]);
        return redirect()->route('perawat.index')->with(['success' =>'Data berhasil Di ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawat $perawat)
    {
        $perawat->delete();
        return  redirect()->route('perawat.index');
    }
}
