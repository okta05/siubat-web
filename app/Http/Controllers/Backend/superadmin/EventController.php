<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller
{
    //
    public function viewEvent(){
        return view('backend.superadmin.event.view_event');
    }
}
