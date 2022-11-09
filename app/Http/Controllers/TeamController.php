<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;


class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAllTeam()
    {
        $allTeams = Team::paginate(24);

        return view('blocks._team_list', ['data' => $allTeams]);
    }

    public function createTeam(TeamRequest $req)
    {
        $newTeam = new Team();
        $newTeam->name = $req->input('name');
        $newTeam->save();

        return redirect()->route('showAllTeam')->with('success', 'Команда была создана');
    }

    public function detailTeam(int $id)
    {
        $team = Team::findOrFail($id);
        return view('blocks._team_detail', ['data' => $team]);
    }

    public function updateTeam(int $id)
    {
        $team = Team::findOrFail($id);
        return view('blocks._team_update', ['data' => $team]);
    }

    public function updateTeamSubmit(int $id, TeamRequest $req)
    {
        $updateTeam = Team::findOrFail($id);
        $updateTeam->name = $req->input('name');
        $updateTeam->save();
        return redirect()->route('detailTeam', $id)->with('success', 'Запись была обновлена');
    }

    public function deleteTeam(int $id)
    {
        Team::findOrFail($id)->delete();
        return redirect()->route('showAllTeam')->with('success', 'Запись была удалена');
    }
}
