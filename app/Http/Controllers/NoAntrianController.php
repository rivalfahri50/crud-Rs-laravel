<?php

namespace App\Http\Controllers;

use App\Models\no_antrian;
use App\Http\Requests\Storeno_antrianRequest;
use App\Http\Requests\Updateno_antrianRequest;
use Illuminate\Http\Request;
class NoAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no_antrians=no_antrian::latest()->paginate(5);
        return view('no_antrian.index' , compact('no_antrians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('no_antrian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeno_antrianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'no_antrian'=>'required',
            'nama'=>'required',
            'tgl_berobat'=>'required',
           ]);
           no_antrian::create([
            'no_antrian'=>$request->no_antrian,
            'nama'=>$request->nama,
            'tgl_berobat'=>$request->tgl_berobat,

           ]);
           return redirect()->route('no_antrian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\no_antrian  $no_antrian
     * @return \Illuminate\Http\Response
     */
    public function show(no_antrian $no_antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\no_antrian  $no_antrian
     * @return \Illuminate\Http\Response
     */
    public function edit(no_antrian $no_antrian)
    {
        return view ('no_antrian.edit', compact('no_antrian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateno_antrianRequest  $request
     * @param  \App\Models\no_antrian  $no_antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Updateno_antrianRequest $request, no_antrian $no_antrian)
    {
        $this->validate($request,[
            'no_antrian'=>'required',
            'nama'=>'required',
            'tgl_berobat'=>'required',
        ]);
            $no_antrian->update([
                'no_antrian'=>$request->no_antrian,
                'nama'=>$request->nama,
                'tgl_berobat'=>$request->tgl_berobat,
            ]);
        return redirect()->route('no_antrian.index')->with(['success' =>'Data berhasil Di ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\no_antrian  $no_antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(no_antrian $no_antrian)
    {
        $no_antrian->delete();
        return  redirect()->route('no_antrian.index');
    }
}
