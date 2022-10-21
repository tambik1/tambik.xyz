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

        return view('blocks._teams', ['data' => $allTeams::all()]);
    }

    public function createTeam(TeamsRequest $req)
    {
        $newTeam = new Teams();
        $newTeam->name = $req->input('name');
        $newTeam->save();

        return redirect()->route('showAllTeam')->with('success', 'Команда была создана');
    }

    public function detailTeam(int $id)
    {
        $team = new Teams();
        return view('blocks._team', ['data' => $team->find($id)]);
    }

    public function updateTeam(int $id)
    {
        $team = new Teams();
        return view('blocks._update-team', ['data' => $team->find($id)]);
    }

    public function updateTeamSubmit(int $id, TeamsRequest $req)
    {
        $updateTeam = Teams::find($id);
        $updateTeam->name = $req->input('name');
        $updateTeam->save();
        return redirect()->route('detailTeam', $id)->with('success', 'Запись была обновлена');
    }

    public function deleteTeam(int $id)
    {
        Teams::find($id)->delete();
        return redirect()->route('showAllTeam', $id)->with('success', 'Запись была удалена');
    }
}
