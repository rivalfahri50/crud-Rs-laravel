<?php

namespace App\Http\Controllers;

use App\Models\Alat_Kesehatan;
use App\Models\dokter;
use App\Models\pasien;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\RuangOperasi;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class RuangOperasiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ruang_operasis = RuangOperasi::where('no_ruang','LIKE','%' .$request->search.'%')->paginate(4);
            $ruang_operasis->appends(['search' => $request->search]);
            session(['search' => $request->search]);
           }else {
            $ruang_operasis = RuangOperasi::paginate(4);
           }
            return view('ruang_operasi.index' , compact('ruang_operasis'));
    }

    public function create()
    {

        $dokters = dokter::all();
        $pasiens = pasien::all();
        $alat_kesehatans = Alat_Kesehatan::all();

        return view ('ruang_operasi.create',compact('dokters','pasiens','alat_kesehatans'));
    }

    public function store(Request $request)
    {
       $this->validate($request , [
        'no_ruang'=>'required|unique:ruang_operasis',
        'status'=>'required',
        'dokter_id'=>'required',
        'pasien_id'=>'required',
        'alat_id'=>'required',



       ],[
        'no_ruang.unique'=>'no sudah terpakai',
        'no_ruang.required'=>'no harus di isi',
        'status.required'=>'status harus dipilih',
        'dokter_id.required'=>'nama dokter harus dipilih',
        'pasien_id.required'=>'nama pasien harus dipilih',
        'alat_id.required'=>'nama alat harus dipilih',
        ]);
       RuangOperasi::create([
        'no_ruang'=>$request->no_ruang,
        'status'=>$request->status,
        'dokter_id'=>$request->dokter_id,
        'pasien_id'=>$request->pasien_id,
        'alat_id'=>$request->alat_id,
        ]);

        Alert::success('Berhasil', 'berhasil menambah data!');
       return redirect()->route('ruang_operasi.index');
    }

    public function edit(RuangOperasi $ruang_operasi)
    {
        $alat_kesehatans = Alat_Kesehatan::all();
        $pasiens = pasien::all();
        $dokters = dokter::all();
        return view('ruang_operasi.edit', compact('ruang_operasi','dokters','pasiens','alat_kesehatans'));
    }
    public function update(Request $request, RuangOperasi $ruang_operasi)
    {

        $this->validate($request,[
          'no_ruang'=>'required',
          'status'=>'required',
          'dokter_id'=>'required',
          'pasien_id'=>'required',
          'alat_id'=>'required',
        ],[

            'no_ruang.required'=>'no harus di isi',
            'status.required'=>'status harus dipilih',
            'dokter_id.required'=>'nama dokter harus dipilih',
            'pasien_id.required'=>'nama pasien harus dipilih',
            'alat_id.required'=>'nama alat harus dipilih',
            ]);
            $ruang_operasi->update([
               'no_ruang'=>$request->no_ruang,
               'status'=>$request->status,
               'dokter_id'=>$request->dokter_id,
               'pasien_id'=>$request->pasien_id,
               'alat_id'=>$request->alat_id,
            ]);
            Alert::success('Berhasil', 'berhasil mengubah data!');
        return redirect()->route('ruang_operasi.index');
    }

    public function destroy(RuangOperasi $ruang_operasi)
    {
        $ruang_operasi->delete();
        return  redirect()->route('ruang_operasi.index');
    }


}
