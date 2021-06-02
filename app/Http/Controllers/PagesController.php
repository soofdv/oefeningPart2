<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Player;
use App\Models\Competition;
use App\Models\School;

class PagesController extends Controller
{
    public function home(){
        //data uit een database halen
        //data meegeven aan de view
        //view returnen
        $players = Player::all();
        $competitions = Competition::all();
        $schools = School::all();

        return view('home', [
            'players' => $players,
            'schools' => $schools,
            'competitions' => $competitions
        ]);
    }
}
