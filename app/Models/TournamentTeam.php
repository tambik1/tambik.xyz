<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentTeam extends Model
{
    use HasFactory;

    public function firstTeam()
    {
        return $this->hasOne(Team::class,'id','team_id');
    }

    public function secondTeam()
    {
        return $this->hasOne(Team::class,'id','team_id');
    }
}
