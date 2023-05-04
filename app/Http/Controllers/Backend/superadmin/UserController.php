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
}
