<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\no_antrian;
use App\Http\Requests\Storeno_antrianRequest;
use App\Http\Requests\Updateno_antrianRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class NoAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
        $no_antrians = no_antrian::where('nama','LIKE','%' .$request->search.'%')->paginate(4);
        $no_antrians->appends(['search' => $request->search]);
        session(['search' => $request->search]);
        }else {
        $no_antrians = no_antrian::paginate(4);
       }
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
            'no_antrian'=>'required|unique:no_antrians',
            'nama'=>'required',
            'tgl_berobat'=>'required|date_format:Y-m-d',
           ],[
            'no_antrian.unique'=>'Kode telah terdaftar',
            'no_antrian.required'=>'no harus di isi ',
            'nama.required'=>'Nama harus di isi',
            'tgl_berobat.required'=>'tanggal berobat harus di isi',
           ]);
           $tgl_berobat_formatted = date('Y-m-d', strtotime($request->tgl_berobat));
           no_antrian::create([
            'no_antrian'=>$request->no_antrian,
            'nama'=>$request->nama,
            'tgl_berobat'=>$tgl_berobat_formatted,

           ]);
           Alert::success('Berhasil', 'berhasil menambah data!');
           return redirect()->route('no_antrian.index')->with('success','Data Berhasil Terkirim');
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
    public function update(Request $request, no_antrian $no_antrian)
    {
        $this->validate($request,[
            'no_antrian'=>'required|unique:no_antrians,no_antrian,'.$no_antrian->id,
            'nama'=>'required',
            'tgl_berobat'=>'required|date_format:Y-m-d',
        ] ,[
            'no_antrian.unique'=>'Kode telah terdaftar',
            'no_antrian.required'=>'no harus di isi ',
            'nama.required'=>'Nama harus di isi',
            'tgl_berobat.required'=>'tanggal berobat harus di isi',
           ] );
        $tgl_berobat_formatted = date('Y-m-d', strtotime($request->tgl_berobat));
            $no_antrian->update([
                'no_antrian'=>$request->no_antrian,
                'nama'=>$request->nama,
                'tgl_berobat'=>$tgl_berobat_formatted,
            ]);
            Alert::success('Berhasil', 'berhasil merubah data!');
        return redirect()->route('no_antrian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\no_antrian  $no_antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(no_antrian $no_antrian)
    {
        try {
            $no_antrian->delete();
            return  redirect()->route('no_antrian.index')->with('successhapus','berhasil menghapus');
        }
        catch (QueryException $e) {
            return back()->withErrors(['antrianerror' => 'Data ini masih digunakan']);
        }
    }
}
