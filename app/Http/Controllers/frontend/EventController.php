<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Acara;

class EventController extends Controller
{
    //
    public function EventView_M(){
    // dd('berhasil masuk page event di tampilan masyarakat');
    $data['allDataAcara']=Acara::all();
    return view('frontend.event', $data);
    
    }   
}