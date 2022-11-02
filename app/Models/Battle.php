<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
