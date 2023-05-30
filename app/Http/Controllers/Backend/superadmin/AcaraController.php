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
            'acara1' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara2' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara3' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara4' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('acara/cover_acara');
        } else {
            $foto = '';
        }

        if ($request->file('acara1')) {
            $acara1 = $request->file('acara1')->store('acara/acara1');
        } else {
            $acara1 = '';
        }

        if ($request->file('acara2')) {
            $acara2 = $request->file('acara2')->store('acara/acara2');
        } else {
            $acara2 = '';
        }

        if ($request->file('acara3')) {
            $acara3 = $request->file('acara3')->store('acara/acara3');
        } else {
            $acara3 = '';
        }

        if ($request->file('acara4')) {
            $acara4 = $request->file('acara4')->store('acara/acara4');
        } else {
            $acara4 = '';
        }

        // dd($request);
        $data=new Acara();
        $data->nm_acara=$request->nm_acara;
        $data->tgl_mulai=$request->tgl_mulai;
        $data->tgl_selesai=$request->tgl_selesai;
        $data->durasi=$request->durasi;
        $data->deskripsi=$request->deskripsi;
        $data->foto=$foto;
        $data->foto_acara1=$acara1;
        $data->foto_acara2=$acara2;
        $data->foto_acara3=$acara3;
        $data->foto_acara4=$acara4;
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
            'acara1' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara2' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara3' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'acara4' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            if($request->oldImage){
            Storage::delete($request->oldImage);
                }
            $foto = $request->file('foto')->store('acara/cover_acara');
        } else {
            $foto = $request->oldImage;
        }

        if ($request->file('acara1')) {
            if($request->oldImage1){
            Storage::delete($request->oldImage1);
                }
            $acara1 = $request->file('acara1')->store('acara/acara1');
        } else {
            $acara1 = $request->oldImage1;
        }

        if ($request->file('acara2')) {
            if($request->oldImage2){
            Storage::delete($request->oldImage2);
                }
            $acara2 = $request->file('acara2')->store('acara/acara2');
        } else {
            $acara2 = $request->oldImage2;
        }

        if ($request->file('acara3')) {
            if($request->oldImage3){
            Storage::delete($request->oldImage3);
                }
            $acara3 = $request->file('acara3')->store('acara/acara3');
        } else {
            $acara3 = $request->oldImage3;
        }

        if ($request->file('acara4')) {
            if($request->oldImage4){
            Storage::delete($request->oldImage4);
                }
            $acara4 = $request->file('acara4')->store('acara/acara4');
        } else {
            $acara4 = $request->oldImage4;
        }

        // dd($request);
        $data=Acara::find($id);
        $data->nm_acara=$request->nm_acara;
        $data->tgl_mulai=$request->tgl_mulai;
        $data->tgl_selesai=$request->tgl_selesai;
        $data->durasi=$request->durasi;
        $data->deskripsi=$request->deskripsi;
        $data->foto=$foto;
        $data->foto_acara1=$acara1;
        $data->foto_acara2=$acara2;
        $data->foto_acara3=$acara3;
        $data->foto_acara4=$acara4;
        $data->save();

        return redirect()->route('view_acara');
    }


    public function AcaraDelete($id){
        $deleteData= Acara::find($id);
        $pathFoto = $deleteData->foto;
        $pathAcara1 = $deleteData->foto_acara1;
        $pathAcara2 = $deleteData->foto_acara2;
        $pathAcara3 = $deleteData->foto_acara3;
        $pathAcara4 = $deleteData->foto_acara4;
        $deleteData->delete();
        
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }

        if ($pathAcara1 != null || $pathAcara1 != '') {
            Storage::delete($pathAcara1);
        }

        if ($pathAcara2 != null || $pathAcara2 != '') {
            Storage::delete($pathAcara2);
        }

        if ($pathAcara3 != null || $pathAcara3 != '') {
            Storage::delete($pathAcara3);
        }

        if ($pathAcara4 != null || $pathAcara4 != '') {
            Storage::delete($pathAcara4);
        }

        return redirect()->route('view_acara');
    }
}