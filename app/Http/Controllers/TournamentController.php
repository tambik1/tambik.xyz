<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use App\Models\Tournament;
use App\Http\Requests\TournamentRequest;

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
        return view('blocks._tournaments',['data' => $allTournament, 'type' => $type]);
    }
//TODO: Под капотом создаем ещё заглушки баттлов исходя из переданного типа, указываем их количество, ставим им позицию и привязываем к турниру по ID.
    public function store(TournamentRequest $req)
    {
        $newTournament = new Tournament();
        $newTournament->name = $req->input('name');
        $newTournament->start_date = $req->input('start_date');
        $newTournament->end_date = $req->input('end_date');
        $newTournament->type = $req->input('type');
        $newTournament->save();
        $tournament = Tournament::orderByDesc('id')->first();
        $idTournament = $tournament->id;
        $typeTournament = (int) $tournament->type;
        $i = 1;
        while ($i < $typeTournament)
        {
            $newBattle = new Battle();
            $newBattle->tournament_id = $idTournament;
            $newBattle->position = $i;
            $newBattle->save();
            $i++;
        }

        return redirect()->route('tournaments.index')->with('success', 'Турнир был создан');
    }

    public function show(int $id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('blocks._tournament', ['data' => $tournament]);
    }

    public function updateTournament(int $id, TournamentRequest $req)
    {
        $updateTournament = Tournament::find($id);
        $updateTournament->name = $req->input('name');
        $updateTournament->save();
        return redirect()->route('tournaments.show', $id)->with('success', 'Запись была обновлена');
    }

    public function deleteTournament(int $id)
    {
        Battle::where('tournament_id',$id)->delete();
        Tournament::find($id)->delete();
        return redirect()->route('tournaments.index')->with('success', 'Запись была удалена');
    }
    public function edit(int $id)
    {
        $tournament = Tournament::find($id);
        return view('blocks._update-tournament', ['data' => $tournament]);
    }
}
