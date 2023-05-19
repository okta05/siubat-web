<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acara;
use Auth;

class AcaraController extends Controller
{
    //
    public function viewAcara(){
        $data['allDataAcara']=Acara::all();
        return view('backend.superadmin.acara.view_acara', $data);
    }

    public function addAcara(){
        // dd('berhasil masuk add umkm');
        return view('backend.superadmin.acara.add_acara');
    }

    public function storeAcara(Request $request){

            
        $validateData=$request->validate([
            'nm_acara' => 'required',
            'foto' => 'mimes:jpg,jpeg,png,mp4,avi|file',
        ]);

        // $file_name = $request->foto->getClientOriginalName();
        // $foto = $request->foto->storeAs('uploads', $file_name);

    //     if($request->file('foto')) {
    //     $foto = $request->file('foto')->store('uploads');
    // } 

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('media');
        } else {
            $foto = '';
        }

        // dd($request);
        $data=new Acara();
        $data->nm_acara=$request->nm_acara;
        $data->tgl_mulai=$request->tgl_mulai;
        $data->tgl_selesai=$request->tgl_selesai;
        $data->durasi=$request->durasi;
        $data->deskripsi=$request->deskripsi;
        $data->foto=$foto;
        $data->save();

        return redirect()->route('view_acara');
    }

}