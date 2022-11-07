<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use App\Models\TournamentTeam;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function statisticsTournament($tournamentId)
    {
        $teams = TournamentTeam::with('firstTeam')->where('tournament_id', $tournamentId)->get();

        $battleData = new Battle();
        $maxScore = $battleData->bestScore($tournamentId);
        $sumScore = $battleData->sumScore($tournamentId);
        $avgScore = $battleData->avgScore($tournamentId);

        return view('blocks._statisticsTournament', ['data' => ['teamData' => $teams, 'maxScore'=>$maxScore, 'sumScore'=>$sumScore, 'avgScore'=>$avgScore]]);
    }

}
