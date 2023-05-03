<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Http\Requests\StoreobatRequest;
use App\Http\Requests\UpdateobatRequest;
use Illuminate\Http\Request;
class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats=obat::latest()->paginate(5);
        return view('obat.index' , compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreobatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'keluhan'=>'required',
            'tgl_berobat'=>'required',
            'biaya'=>'required',
           ]);
           obat::create([
            'keluhan'=>$request->keluhan,
            'tgl_berobat'=>$request->tgl_berobat,
            'biaya'=>$request->biaya,

           ]);
           return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(obat $obat)
    {
        return view ('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateobatRequest  $request
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateobatRequest $request, obat $obat)
    {
        $this->validate($request,[
            'keluhan'=>'required',
            'tgl_berobat'=>'required',
            'biaya'=>'required',
        ]);
            $obat->update([
                'keluhan'=>$request->keluhan,
                'tgl_berobat'=>$request->tgl_berobat,
                'biaya'=>$request->biaya,
            ]);
        return redirect()->route('obat.index')->with(['success' =>'Data berhasil Di ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(obat $obat)
    {
        $obat->delete();
        return  redirect()->route('obat.index');
    }
}
