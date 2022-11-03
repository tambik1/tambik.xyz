<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamSelectionRequest;
use App\Models\Battle;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\TournamentTeam;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BattleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBattle($tournamentId)
    {
        $checkTeam = TournamentTeam::where('tournament_id', $tournamentId)->get()->count();
        if ($checkTeam === 0) {
            return redirect()->route('teamSelection', $tournamentId)->with('redirect', 'Необходимо добавить команды');
        }
        $tournament = new Tournament();
        $tournamentData = $tournament::findOrFail($tournamentId);
        $type = $tournament->getTypeById($tournamentId);
        $configGrid = Tournament::getGridConfig($type);
        $roundData = Battle::with('firstTeam','secondTeam')->where('tournament_id', $tournamentId)->get();
       return view('blocks._tournament_grid__' . $type,['data' =>['configGrid'=>$configGrid,'roundData'=>$roundData,'tournamentData'=>$tournamentData]]);
    }

    public function teamSelection($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
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
            DB::table('tournament_teams')->insert([
                'tournament_id' => $tournamentId,
                'team_id' => $item
            ]);
        }
        return redirect()->route('showBattle', $tournamentId)->with('success', 'Команды были добавлены');
    }
    public function battleUpdate($battleId){
        $battleData = Battle::with('firstTeam','secondTeam')->findOrFail($battleId);
        $teamTournamentData = TournamentTeam::with('firstTeam','secondTeam')->where('tournament_id',$battleData->tournament_id)->get();
        return view('blocks._battle_update',['data' =>['battleData'=>$battleData,'teamTournamentData'=>$teamTournamentData]]);
    }

    public function battleUpdateSubmit($battleId, Request $request){
        $updateBattle = Battle::findOrFail($battleId);
        $updateBattle->first_team = $request->input('first_team');
        $updateBattle->second_team = $request->input('second_team');
        $updateBattle->first_team_score = $request->input('first_team_score');
        $updateBattle->second_team_score = $request->input('second_team_score');
        $updateBattle->date = $request->input('date');
        $updateBattle->save();

        return redirect()->route('showBattle', $updateBattle->tournament_id)->with('success', 'Запись о матче, была обновлена');
    }
}
