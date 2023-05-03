<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Http\Requests\StoredokterRequest;
use App\Http\Requests\UpdatedokterRequest;
use Illuminate\Http\Request;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters=dokter::latest()->paginate(5);
        return view('dokter.index' , compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredokterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'nama'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required',
           ]);
           $image = $request->file('image');
           $image->storeAs('public/dkt', $image->hashName());
           dokter::create([
            'nama'=>$request->nama,
            'image'=>$image->hashName(),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,

           ]);
           return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(dokter $dokter)
    {
        return view ('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedokterRequest  $request
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedokterRequest $request, dokter $dokter)
    {
        $this->validate($request,[
            'nama'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required',
        ]);
        if($request->hashFile('name')){
            $image = $request->fil('image');
            $image->storeAs('storage/dkt', $image->hashName());

            Storage::delete('storage/dkt'.$dokter->image);
            $dokter->update([
                'nama'=>$request->nama,
                'image'=>$image->hashName(),
                'jenis_kelamin'=>$request->jenis_kelamin,
                'tgl_lahir'=>$request->tgl_lahir,
            ]);
        } else {
            //update post without image
            $dokter->update([
                'nama'=>$request->nama,
                'image'=>$image->hashName(),
                'jenis_kelamin'=>$request->jenis_kelamin,
                'tgl_lahir'=>$request->tgl_lahir,
            ]);
            }
        return redirect()->route('dokter.index')->with(['success' =>'Data berhasil Di ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokter $dokter)
    {
      

      $dokter->delete();

      return redirect()->route('dokter.index')->with(['success'=>'Data Berhasil Dihapus!']);
    }
}
