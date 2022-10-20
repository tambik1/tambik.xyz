<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamsRequest;
use App\Models\Teams;


class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAllTeam(Request $req)
    {
        $allTeams = new Teams();

        return view('blocks._teams',['data'=>$allTeams::all()]);
    }

    /**
     * @property string $name
     */
    public function createTeam(TeamsRequest $req)
    {
        $newTeam = new Teams();
        $newTeam->name = $req->input('name');
        $newTeam->save();

        return redirect()->route('showAllTeam')->with('success', 'Команда была создана');
    }
}
