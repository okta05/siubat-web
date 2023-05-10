<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Auth;

class EventController extends Controller
{
    //
    public function viewEvent(){
        $data_event['allDataEvent']=Event::all();
        return view('backend.superadmin.event.view_event', $data_event);
    }
}
