<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
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
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $obats = obat::where('keluhan','LIKE','%' .$request->search.'%')->paginate(1);
            $obats->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
            $obats = obat::paginate(1);
           }
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
            'tgl_berobat'=>'required|date_format:Y-m-d',
            'biaya'=>'required',
           ]);
           $tgl_berobat_formatted = date('Y-m-d', strtotime($request->tgl_berobat));
           obat::create([
            'keluhan'=>$request->keluhan,
            'tgl_berobat'=>$request->tgl_berobat,
            'tgl_berobat'=>$tgl_berobat_formatted,
            'biaya'=>$request->biaya,


           ],[
            'keluhan.required'=>'keluhan harus di isi',
            'tgl_berobat.required'=>'Tanggall harus di isi',
            'biaya.required'=>'biaya harus di isi',
           ]);
           Alert::success('Berhasil', 'berhasil menambah data!');
           return redirect()->route('obat.index')->with('success','Data Berhasil Terkirim');
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

    public function update(Request $request, obat $obat)
    {
        $this->validate($request,[
            'keluhan'=>'required',
            'tgl_berobat'=>'required|date_format:Y-m-d',
            'biaya'=>'required',
        ],[
            'keluhan.required'=>'keluhan harus diisi',
            'tgl_berobat.date_format'=>'tanggal berobat harus diisi',
            'biaya.required'=>'biaya harus diisi',
        ]);
        $tgl_berobat_formatted = date('Y-m-d', strtotime($request->tgl_berobat));
            $obat->update([
                'keluhan'=>$request->keluhan,
                'tgl_berobat'=>$request->tgl_berobat,
                'tgl_berobat'=>$tgl_berobat_formatted,
                'biaya'=>$request->biaya,
            ]);
            Alert::success('Berhasil', 'berhasil merubah data!');
        return redirect()->route('obat.index');
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
