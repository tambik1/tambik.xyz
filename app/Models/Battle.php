<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Battle extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function firstTeam()
    {
        return $this->hasOne(Team::class,'id','first_team');
    }

    public function secondTeam()
    {
        return $this->hasOne(Team::class,'id','second_team');
    }

    public function bestScore($tournamentId){
        $maxScore = DB::select("SELECT t.id, t.name, MAX(r.team_score) AS best
FROM teams t
         JOIN (SELECT b.first_team AS team_id, b.first_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId
               UNION ALL
               SELECT b.second_team AS team_id, b.second_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId) r ON t.id = r.team_id
GROUP BY r.team_id;");
        return $maxScore;
    }

    public function sumScore($tournamentId){
        $sumScore = DB::select("SELECT t.id, t.name, SUM(r.team_score) AS sum_score
FROM teams t
         JOIN (SELECT b.first_team AS team_id, b.first_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId
               UNION ALL
               SELECT b.second_team AS team_id, b.second_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId) r ON t.id = r.team_id
GROUP BY r.team_id;");
        return $sumScore;
    }

    public function avgScore($tournamentId){
        $avgScore = DB::select("SELECT t.id, t.name, AVG(r.team_score) AS avg_score
FROM teams t
         JOIN (SELECT b.first_team AS team_id, b.first_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId
               UNION ALL
               SELECT b.second_team AS team_id, b.second_team_score AS team_score
               FROM battles b
               WHERE tournament_id = $tournamentId) r ON t.id = r.team_id
GROUP BY r.team_id;");
        return $avgScore;
    }


}
