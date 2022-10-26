<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function isAdmin(){
        $isAdmin = 0;
        $userId = \Auth::id();
        $role = $this->where('user_id', '=', $userId)->get();
        foreach ($role as $id_role)
        {
            $isAdmin = $id_role->role;
        }
        if($isAdmin)
        {
            return true;
        }
    }
}
