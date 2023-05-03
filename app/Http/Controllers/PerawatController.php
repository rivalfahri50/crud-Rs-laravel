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
        'tgl_lahir'=>'required',
       ]);
       Perawat::create([
        'nama'=>$request->nama,
        'jenis_kelamin'=>$request->jenis_kelamin,
        'tgl_lahir'=>$request->tgl_lahir,

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
    public function edit(Request $request)
    {
        return view('perawat.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerawatRequest  $request
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerawatRequest $request, Perawat $perawat)
    {
        //
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
