<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;
use Illuminate\Http\Request;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens=pasien::latest()->paginate(5);
        return view('pasien.index' , compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pasien.create');
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
            'no_antrian'=>'required',
            'keluhann'=>'required',
           ]);
           pasien::create([
            'nama'=>$request->nama,
            'no_antrian'=>$request->no_antrian,
            'keluhann'=>$request->keluhann,

           ]);
           return redirect()->route('pasien.index');
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
        return view ('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepasienRequest  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepasienRequest $request, pasien $pasien)
    {
        $this->validate($request,[
            'nama'=>'required',
            'no_antrian'=>'required',
            'keluhan'=>'required',
        ]);
            $pasien->update([
                'nama'=>$request->nama,
                'no_antrian'=>$request->no_antrian,
                'keluhan'=>$request->keluhan,
            ]);
        return redirect()->route('pasien.index')->with(['success' =>'Data berhasil Di ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        $perawat->delete();
        return  redirect()->route('pasien.index');
    }
}
