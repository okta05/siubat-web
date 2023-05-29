<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usaha;
use App\Models\Umkm;

class UsahaController extends Controller
{
    //
    public function UmkmView_M () {
        // dd('Berhasil Masuk halaman UMKM');
        $data['allDataUMKM']=Umkm::all();
        return view('frontend.umkm', $data);
    }
}
