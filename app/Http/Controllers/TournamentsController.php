<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Exception;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function show_tournaments(){
        $tournaments = Tournament::all();
        return view("home", ["tournaments"=>$tournaments]);
    }
    public function show_tournament_datails($id) {
        try{
            $tournament = Tournament::findOrFail($id);
            return view("tournament_details", ["tournament"=>$tournament]);
        }catch(Exception $e){
            return "Request failed {{$e->getMessage()}}";
        }
    }
}
