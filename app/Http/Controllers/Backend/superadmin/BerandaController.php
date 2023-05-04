<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class BerandaController extends Controller
{
    //
    public function user(){
        return view('backend.superadmin.user.view_user');
    }

    public function event(){
        return view('backend.superadmin.event.view_user');
    }
}
