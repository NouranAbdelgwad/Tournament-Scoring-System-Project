<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Events_update;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EventController extends Controller
{
    public function show_academic(){
        $events = Events_update::all();
        return view("academic_events", ["events"=>$events]);
    }
    public function show_sporting(){
        $events = Events_update::all();
        return view("sporting_events", ["events"=>$events]);
    }
    public function show_details($Event_ID){
        try{
            $event = Events_update::findOrFail($Event_ID);
            return view("event_details", ["event"=>$event]);
        }catch(Exception $e){
            return "Error {{$e->getMessage()}}";
        }
    }
}
