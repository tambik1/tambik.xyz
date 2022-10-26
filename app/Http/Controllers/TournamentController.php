<?php

namespace App\Http\Controllers;

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
        $allTournament = Tournament::paginate(25);
        return view('blocks._tournaments',['data' => $allTournament]);
    }

    public function store(TournamentRequest $req)
    {
        $newTournament = new Tournament();
        $newTournament->name = $req->input('name');
        $newTournament->start_date = $req->input('start_date');
        $newTournament->end_date = $req->input('end_date');
        $newTournament->save();

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
        Tournament::find($id)->delete();
        return redirect()->route('tournaments.index')->with('success', 'Запись была удалена');
    }
    public function edit(int $id)
    {
        $tournament = Tournament::find($id);
        return view('blocks._update-tournament', ['data' => $tournament]);
    }
}
