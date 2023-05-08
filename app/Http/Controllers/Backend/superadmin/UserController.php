<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    //
    public function viewUser(){
        $data['allDataUser']=User::all();
        return view('backend.superadmin.user.view_user', $data);
    }

    public function addUser(){
        // $data['allDataUser']=User::all();
        return view('backend.superadmin.user.add_user');
    }

    public function storeUser(Request $request){

        // dd($request);
        $validateData=$request->validate([
            'email' => 'required|unique:users',
            'textNama' => 'required',
        ]);

        // dd($request);
        $data=new User();
        $data->name=$request->textNama;
        $data->alamat=$request->textAlamat;
        $data->email=$request->email;
        $data->no_wa=$request->textNo_Wa;
        $data->usertype=$request->selectUser;
        $data->password=bcrypt($request->password);
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
            'email' => 'required|unique:users',
            'textNama' => 'required',
        ]);

        // dd($request);
        $data=User::find($id);
        $data->name=$request->textNama;
        $data->alamat=$request->textAlamat;
        $data->email=$request->email;
        $data->no_wa=$request->textNo_Wa;
        $data->usertype=$request->selectUser;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('view_user');
    }

    public function UserDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData= User::find($id);
        $deleteData->delete();

        
        return redirect()->route('view_user');
    }
}

