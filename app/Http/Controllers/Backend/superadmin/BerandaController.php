<?php

namespace App\Http\Controllers\Backend\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Acara;
use App\Models\Umkm;
use App\Models\User;

class BerandaController extends Controller
{
    //
    public function beranda(){
        $userCount = User::count();
        $eventCount = Acara::count();
        $umkmCount = Umkm::count();
        return view('backend.superadmin.index', compact('userCount', 'eventCount', 'umkmCount'));
    }
}