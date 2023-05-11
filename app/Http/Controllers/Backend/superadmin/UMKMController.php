<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use Auth;

class UMKMController extends Controller
{
    //
    public function viewUMKM(){
        $data['allDataUMKM']=Umkm::all();
        return view('backend.superadmin.umkm.view_umkm', $data);
    }

    public function addUMKM(){
        // dd('berhasil masuk add umkm');
        return view('backend.superadmin.umkm.add_umkm');
    }

    public function storeUMKM(Request $request){

        // dd($request);
        $request->validate([
            'textNama' => 'required',
        ]);
    
        // dd($request);
        $data=new Umkm();
        $data->nm_pemilik=$request->textNama;
        $data->nm_produk=$request->textNamaProduk;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;
        $data->alamat=$request->alamat;
        $data->foto=$request->gambar;
        $data->save();

        return redirect()->route('view_umkm');
    }

    public function UMKMEdit($id){
        $editData = Umkm::find($id);
        return view('backend.superadmin.umkm.edit_umkm', compact('editData'));
    }

    public function UMKMUpdate(Request $request, $id){

        // dd($request);
        $validateData=$request->validate([
            'textNama' => 'required',
        ]);

        // dd($request);
        $data=Umkm::find($id);
        $data->nm_pemilik=$request->textNama;
        $data->nm_produk=$request->textNamaProduk;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;
        $data->alamat=$request->alamat;
        $data->foto=$request->gambar;
        $data->save();

        return redirect()->route('view_umkm');
    }

    public function UMKMDelete($id){
        $deleteData= Umkm::find($id);
        $deleteData->delete();

        return redirect()->route('view_umkm');
    }
}