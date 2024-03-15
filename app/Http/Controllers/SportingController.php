<?php

namespace App\Http\Controllers;

use App\Models\Events_update;
use Illuminate\Http\Request;

class SportingController extends Controller
{
    public function index(){
        $events = Events_update::all();
        return view("sporting_events", ["events"=>$events]);
    }
}
