<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
}
