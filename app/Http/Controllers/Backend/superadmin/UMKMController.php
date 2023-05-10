<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UMKMController extends Controller
{
    //
    public function viewUMKM(){
        return view('backend.superadmin.umkm.view_umkm');
    }
}