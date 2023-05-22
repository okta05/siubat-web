<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Profile;
use Auth;

class ProfileController extends Controller
{
    //
    public function profileView() {
        dd('berhasil masuk profile view');
    }
}
