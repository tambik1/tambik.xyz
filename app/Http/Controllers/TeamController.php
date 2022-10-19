<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAllTeam()
    {
        return view('blocks._teams');
    }

    public function createTeam()
    {

    }
}
