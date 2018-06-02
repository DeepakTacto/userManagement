<?php

namespace App\Http\Controllers;

use App\team;
use Auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(Request $request){
        $objTeam = new team();
        $objTeam->userId = Auth::user()->id;
        $objTeam->name = $request->input('team');
        $objTeam->save();
    }
}
