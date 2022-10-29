<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showBattle($tournamentId){

        return view('blocks._tournament_grid');
    }
}
