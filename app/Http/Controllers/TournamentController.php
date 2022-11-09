<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use App\Models\Tournament;
use App\Http\Requests\TournamentRequest;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $type = Tournament::getType();
        $allTournament = Tournament::paginate(25);
        return view('blocks._tournament_list', ['data' => $allTournament, 'type' => $type]);
    }

    public function store(TournamentRequest $req)
    {
        $newTournament = new Tournament();
        $newTournament->name = $req->input('name');
        $newTournament->start_date = $req->input('start_date');
        $newTournament->end_date = $req->input('end_date');
        $newTournament->type = $req->input('type');
        $newTournament->save();
        $tournament = Tournament::orderByDesc('id')->first();
        $tournamentId = $tournament->id;
        $typeTournament = (int)$tournament->type;
        $i = 1;
        while ($i < $typeTournament) {
            $newBattle = new Battle();
            $newBattle->tournament_id = $tournamentId;
            $newBattle->position = $i;
            $newBattle->save();
            $i++;
        }

        return redirect()->route('teamSelection', $tournamentId)->with('success', 'Турнир был создан,осталось выбрать команды');
    }

    public function show(int $tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        return view('blocks._tournament_detail', ['data' => $tournament]);
    }

    public function updateTournament(int $tournamentId, TournamentRequest $req)
    {
        $updateTournament = Tournament::findOrFail($tournamentId);
        $updateTournament->name = $req->input('name');
        $updateTournament->start_date = $req->input('start_date');
        $updateTournament->end_date = $req->input('end_date');
        $updateTournament->type = $req->input('type');
        $updateTournament->save();
        return redirect()->route('tournaments.show', $tournamentId)->with('success', 'Запись была обновлена');
    }

    public function deleteTournament(int $tournamentId)
    {
        Battle::where('tournament_id', $tournamentId)->delete();
        DB::table('tournament_teams')->where('tournament_id', $tournamentId)->delete();
        Tournament::findOrFail($tournamentId)->delete();
        return redirect()->route('tournaments.index')->with('success', 'Запись была удалена');
    }

    public function edit(int $tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        return view('blocks._tournament_update', ['data' => $tournament]);
    }
}
