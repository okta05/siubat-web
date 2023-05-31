<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Beranda;
use Auth;

class UserController extends Controller
{
    //
    public function viewUser(){
        $userCount = User::count();        
        $data['allDataUser']=User::all();
        return view('backend.superadmin.user.view_user', $data, compact('userCount'));
    }

    public function addUser(){
        // $data['allDataUser']=User::all();
        return view('backend.superadmin.user.add_user');
    }

    public function storeUser(Request $request){

        // dd($request);
        $validateData=$request->validate([
            'email' => 'required|unique:users',
            'foto' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('profile');
        } else {
            $foto = '';
        }

        // dd($request);
        $data=new User();
        $data->name=$request->textNama;
        $data->alamat=$request->textAlamat;
        $data->email=$request->email;
        $data->no_wa=$request->textNo_Wa;
        $data->usertype=$request->selectUser;
        $data->password=bcrypt($request->password);
        $data->foto=$foto;
        $data->save();

        return redirect()->route('view_user');
    }

    public function UserEdit($id){
        // dd('berhasil masuk controller user edit');
        $editData= User::find($id);
        return view('backend.superadmin.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){

        // dd($request);
        $validateData=$request->validate([
            'email' => 'required',
            'foto' => 'mimes:jpg,jpeg,png|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            if($request->oldImage){
            Storage::delete($request->oldImage);
                }
            $foto = $request->file('foto')->store('profile');
        } else {
            $foto = $request->oldImage;
        }

        // dd($request);
        $data=User::find($id);
        $data->name=$request->textNama;
        $data->alamat=$request->textAlamat;
        $data->email=$request->email;
        $data->no_wa=$request->textNo_Wa;
        $data->usertype=$request->selectUser;
        $data->password=bcrypt($request->password);
        $data->foto=$foto;
        $data->save();

        return redirect()->route('view_user');
    }

    public function UserDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData = User::find($id);
        $pathFoto = $deleteData->foto;
        if (User::find($id == 1)) {
            return redirect()->route('view_user')->with('alert','Tidak dapat menghapus user ini!');
        }elseif (User::find($id == 2)) {
            return redirect()->route('view_user')->with('alert','Tidak dapat menghapus user ini!');
        }
          
        elseif ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        $deleteData->delete();

        return redirect()->route('view_user');
    }
}