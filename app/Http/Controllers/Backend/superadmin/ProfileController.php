<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Auth;

class ProfileController extends Controller
{
    //

    public function ProfilView(){
        // dd('berhasil');
        $id=Auth::user()->id;
        $user=User::find($id);

        return view('backend.superadmin.profile.view_profile', compact('user'));
    }

    public function ProfilEdit() {
        $id=Auth::user()->id;
        $editData=User::find($id);

        return view('backend.superadmin.profile.edit_profile', compact('editData'));
    }

    public function ProfilUpdate(Request $request) {
       $data=User::find(Auth::user()->id);

       if ($request->file('foto')) {
        if($request->oldImage){
        Storage::delete($request->oldImage);
        Storage::put('backend/img/no-image.jpg');
            }
        $foto = $request->file('foto')->store('profile');
    } else {
        $foto = $request->oldImage;
    }

       $data->name=$request->textNama;
       $data->alamat=$request->textAlamat;
       $data->email=$request->email;
       $data->no_wa=$request->textNo_Wa;
       $data->foto=$foto;
       $data->save();

       return redirect()->route('profile.view'); 
    }
}