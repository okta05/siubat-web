<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use Auth;

class BerandaController extends Controller
{
    //
    public function index(){
        $jumlah_umkm = Umkm::all()->count();
        return view('backend.superadmin.index')->with('jumlah_umkm', $jumlah_umkm);
    }
}