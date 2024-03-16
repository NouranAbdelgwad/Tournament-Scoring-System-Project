<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\Events_update;
use App\Models\Tournament;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function showTournaments(){
        $tournaments=Tournament::all();
        return view("show_tournament", ["tournaments" => $tournaments]);
    }
    public function showEvents(){
        $events = Events_update::all();
        return view("show_events", ["events"=>$events]);
    }
    public function showAdmins(){
        $admins = Admin::all();
        return view("show_admins", ["admins"=>$admins]);
    }
}
