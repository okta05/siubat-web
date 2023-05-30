<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

            
        $validateData=$request->validate([
            'textNama' => 'required',
            'foto' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk1' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk2' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk3' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk4' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        // $file_name = $request->foto->getClientOriginalName();
        // $foto = $request->foto->storeAs('uploads', $file_name);

    //     if($request->file('foto')) {
    //     $foto = $request->file('foto')->store('uploads');
    // } 

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('uploads');
        } else {
            $foto = '';
        }

        if ($request->file('produk1')) {
            $produk1 = $request->file('produk1')->store('foto_produk');
        } else {
            $produk1 = '';
        }

        if ($request->file('produk2')) {
            $produk2 = $request->file('produk2')->store('foto_produk2');
        } else {
            $produk2 = '';
        }

        if ($request->file('produk3')) {
            $produk3 = $request->file('produk3')->store('foto_produk3');
        } else {
            $produk3 = '';
        }

        if ($request->file('produk4')) {
            $produk4 = $request->file('produk4')->store('foto_produk4');
        } else {
            $produk4 = '';
        }

        // dd($request);
        $data=new Umkm();
        $data->nm_pemilik=$request->textNama;
        $data->nm_produk=$request->textNamaProduk;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;
        $data->alamat=$request->alamat;
        $data->foto=$foto;
        $data->produk1=$produk1;
        $data->produk2=$produk2;
        $data->produk3=$produk3;
        $data->produk4=$produk4;
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
            'foto' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk1' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk2' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk3' => 'mimes:jpg,jpeg,png|image|file|max:2048',
            'produk4' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        // if($request->file('foto')) {
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $foto = $request->file('foto')->store('uploads');
        // }

        if ($request->file('foto')) {
            if($request->oldImage){
            Storage::delete($request->oldImage);
                }
            $foto = $request->file('foto')->store('uploads');
        } else {
            $foto = $request->oldImage;
        }

        if ($request->file('produk1')) {
            if($request->oldImage1){
            Storage::delete($request->oldImage1);
                }
            $produk1 = $request->file('produk1')->store('foto_produk');
        } else {
            $produk1 = $request->oldImage1;
        }

        if ($request->file('produk2')) {
            if($request->oldImage2){
            Storage::delete($request->oldImage2);
                }
            $produk2 = $request->file('produk2')->store('foto_produk2');
        } else {
            $produk2 = $request->oldImage2;
        }

        if ($request->file('produk3')) {
            if($request->oldImage3){
            Storage::delete($request->oldImage3);
                }
            $produk3 = $request->file('produk3')->store('foto_produk3');
        } else {
            $produk3 = $request->oldImage3;
        }


        if ($request->file('produk4')) {
            if($request->oldImage4){
            Storage::delete($request->oldImage4);
                }
            $produk4 = $request->file('produk4')->store('foto_produk4');
        } else {
            $produk4 = $request->oldImage4;
        }


        // dd($request);
        $data=Umkm::find($id);
        $data->nm_pemilik=$request->textNama;
        $data->nm_produk=$request->textNamaProduk;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;
        $data->alamat=$request->alamat;
        $data->foto=$foto;
        $data->produk1=$produk1;
        $data->produk2=$produk2;
        $data->produk3=$produk3;
        $data->produk4=$produk4;
        $data->save();

        return redirect()->route('view_umkm');
    }

    public function UMKMDelete($id){
        $deleteData= Umkm::find($id);
        $pathFoto = $deleteData->foto;
        $pathProduk1 = $deleteData->produk1;
        $pathProduk2 = $deleteData->produk2;
        $pathProduk3 = $deleteData->produk3;
        $pathProduk4 = $deleteData->produk4;
        $deleteData->delete();

        
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }

        if ($pathProduk1 != null || $pathProduk1 != '') {
            Storage::delete($pathProduk1);
        }

        if ($pathProduk2 != null || $pathProduk2 != '') {
            Storage::delete($pathProduk2);
        }

        if ($pathProduk3 != null || $pathProduk3 != '') {
            Storage::delete($pathProduk3);
        }

        if ($pathProduk4 != null || $pathProduk4 != '') {
            Storage::delete($pathProduk4);
        }

        return redirect()->route('view_umkm');
    }
}