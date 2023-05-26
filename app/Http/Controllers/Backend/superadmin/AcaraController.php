<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Acara;
use Auth;

class AcaraController extends Controller
{
    //
    public function viewAcara(){
        $eventCount = Acara::count();

        $data['allDataAcara']=Acara::all();
        return view('backend.superadmin.acara.view_acara', $data, compact('eventCount'));
    }

    public function addAcara(){
        // dd('berhasil masuk add Acara');
        return view('backend.superadmin.acara.add_acara');
    }

    public function storeAcara(Request $request){

        $validateData=$request->validate([
            'nm_acara' => 'required',
            'foto' => 'mimes:jpg,jpeg,png,mp4,avi|file',
        ]);

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

    public function AcaraEdit($id){
        $editData = Acara::find($id);
        return view('backend.superadmin.acara.edit_acara', compact('editData'));
    }

    public function AcaraUpdate(Request $request, $id){

        // dd($request);
        $validateData=$request->validate([
            'nm_acara' => 'required',
            'foto' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            if($request->oldImage){
            Storage::delete($request->oldImage);
                }
            $foto = $request->file('foto')->store('uploads');
        } else {
            $foto = $request->oldImage;
        }
        // dd($request);
        $data=Acara::find($id);
        $data->nm_acara=$request->nm_acara;
        $data->tgl_mulai=$request->tgl_mulai;
        $data->tgl_selesai=$request->tgl_selesai;
        $data->durasi=$request->durasi;
        $data->deskripsi=$request->deskripsi;
        $data->foto=$foto;
        $data->save();

        return redirect()->route('view_acara');
    }


    public function AcaraDelete($id){
        $deleteData= Acara::find($id);
        $pathFoto = $deleteData->foto;
        $deleteData->delete();

        
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }

        return redirect()->route('view_acara');
    }
}