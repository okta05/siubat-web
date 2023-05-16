<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acara;

class AcaraController extends Controller
{
    //
    public function viewAcara(){
        $data['allDataAcara']=Acara::all();
        return view('backend.superadmin.acara.view_acara', $data);
    }

}
