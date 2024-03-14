<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role(Request $request){
        return view("team_or_individual");
    }
    public function selection(Request $request){
        session()->put("signupType", $request->input("team_individual"));
        return route("processSelection");
    }
    public function processSelection($type)
    {
        // Validate $type parameter (optional)

        if ($type === 'team') {
            return 'team_signup';
        } else {
            return 'individual_signup';
        }
    }


}
