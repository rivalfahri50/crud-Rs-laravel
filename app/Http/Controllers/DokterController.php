<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\dokter;
use App\Http\Requests\StoredokterRequest;
use App\Http\Requests\UpdatedokterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->has('search')) {
        $dokters = dokter::where('nama','LIKE','%' .$request->search.'%')->paginate(4);
        $dokters->appends(['search' => $request->search]);
        session(['search' => $request->search]);
       }else {
        $dokters = dokter::paginate(4);
       }
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
            'tgl_lahir'=>'required|date_format:Y-m-d',
           ],[
            'nama.required'=>'nama wajib diisi',
            'image.required'=>'foto harus di pilih',
            'jenis_kelamin.required'=>'jenis kelamin harus dipilih',
            'tgl_lahir.required'=>'tanggal lahir harus di isi',
           ]);
           $tgl_lahir_formatted = date('Y-m-d', strtotime($request->tgl_lahir));
           $image = $request->file('image');
           $image->storeAs('public/dkt', $image->hashName());
           dokter::create([
            'nama'=>$request->nama,
            'image'=>$image->hashName(),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'tgl_lahir'=>$tgl_lahir_formatted,

           ]);
           Alert::success('Berhasil', 'berhasil menambah data!');
           return redirect()->route('dokter.index')->with('success','Data Berhasil Terkirim');
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
     */public function update(Request $request, dokter $dokter)
{
    $this->validate($request,[
        'nama'=>'required',
        'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jenis_kelamin'=>'required',
        'tgl_lahir'=>'required|date_format:Y-m-d',
    ],[
        'nama.required'=>'nama wajib diisi',
        'image.required'=>'foto harus di pilih',
        'jenis_kelamin.required'=>'jenis kelamin harus dipilih',
        'tgl_lahir.required'=>'tanggal harus diisi',
    ]);
    $tgl_lahir_formatted = date('Y-m-d', strtotime($request->tgl_lahir));
    if($request->hasFile('image')){
        $image = $request->file('image');
        $image->storeAs('public/dkt', $image->hashName());

        Storage::delete('public/dkt/'.$dokter->image);
        $dokter->update([
            'nama'=>$request->nama,
            'image'=>$image->hashName(),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'tgl_lahir'=>$tgl_lahir_formatted,

        ]);
    } else {
        $tgl_lahir_formatted = date('Y-m-d', strtotime($request->tgl_lahir));
        $image = $dokter->image;

        $dokter->update([
            'nama'=>$request->nama,
            'image'=>$image,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'tgl_lahir'=>$tgl_lahir_formatted,
        ]);
    }
    Alert::success('Berhasil', 'berhasil merubah data!');
    return redirect()->route('dokter.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokter $dokter)
    {
        try {
            $imagePath = public_path('storage/dkt/'.$dokter->image);
    
            // Hapus data dokter
            $dokter->delete();
    
            // Periksa apakah file gambar masih ada sebelum menghapus
            if (file_exists($imagePath)) {
                // Menghapus file gambar jika ada
                unlink($imagePath);
            }
    
            return redirect()->route('dokter.index')->with('successhapus', 'Berhasil menghapus');
        } catch (QueryException $e) {
            return back()->withErrors(['doktererror' => 'Data ini masih digunakan']);
        }
    }
    
}
