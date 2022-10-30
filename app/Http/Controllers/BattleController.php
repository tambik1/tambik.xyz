<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamSelectionRequest;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Support\Facades\DB;


class BattleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBattle($tournamentId)
    {
        $checkTeam = DB::table('tournament_team')->where('tournament_id', $tournamentId)->get()->count();
        if ($checkTeam === 0) {
            return redirect()->route('teamSelection', $tournamentId)->with('redirect', 'Необходимо добавить команды');
        }
        $tournament = new Tournament();
        $type = $tournament->getTypeById($tournamentId);


        return view('blocks._tournament_grid__' . $type);
    }

    public function teamSelection($tournamentId)
    {
        $tournament = Tournament::find($tournamentId);
        $teams = Team::all();
        $typeTournament = $tournament->type;
        return view('blocks._team_selection', ['data' => ['typeTournament' => $typeTournament, 'tournamentId' => $tournamentId, 'teams' => $teams]]);
    }

    public function teamSelectionSubmit(TeamSelectionRequest $team)
    {
        $tournamentId = $team->input('tournament_id');
        foreach ($team->request as $key => $item) {
            if ($key === '_token' || $key === 'tournament_id') {
                continue;
            }
            DB::table('tournament_team')->insert([
                'tournament_id' => $tournamentId,
                'team_id' => $item
            ]);
        }
        return redirect()->route('showBattle', $tournamentId)->with('success', 'Команды были добавлены');
    }
}
