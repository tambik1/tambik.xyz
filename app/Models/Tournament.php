<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Tournament extends Model
{
    public $timestamps = false;
    use HasFactory;

    public static function getType()
    {
        $config = Config::get('grid');

        return array_keys($config);
    }
    public function getTypeById($tournamentId){
        $tournamentType =$this->where('id',$tournamentId)->first();
        return $tournamentType->type;

    }
}
