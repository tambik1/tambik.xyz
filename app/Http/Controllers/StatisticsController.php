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

    public function statisticsTournament(int $tournamentId)
    {
        $teams = TournamentTeam::with('firstTeam')->where('tournament_id', $tournamentId)->get();

        $battleData = new Battle();
        $maxScore = $battleData->bestScoreInTournament($tournamentId);
        $sumScore = $battleData->sumScoreInTournament($tournamentId);
        $avgScore = $battleData->avgScoreInTournament($tournamentId);

        return view('blocks._tournament_statistics', ['data' => ['teamData' => $teams, 'maxScore' => $maxScore, 'sumScore' => $sumScore, 'avgScore' => $avgScore]]);
    }

    public function ratingTeam()
    {
        $battleData = new Battle();
        $ratingData = $battleData->overallRating();
        return view('blocks._rating', ['data' => ['ratingData'=>$ratingData]]);
    }

}
