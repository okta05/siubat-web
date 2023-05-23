<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class ProfileController extends Controller
{
    //

    public function ProfileView(){
        // dd('berhasil');
        return view('backend.superadmin.profile.view_profile');
    }
}
