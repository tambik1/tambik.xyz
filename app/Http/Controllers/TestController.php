<?php

namespace App\Http\Controllers;

use App\Models\UsersRole;


//Данный контроллер реализован специально, что бы проводить разные тесты
class TestController extends Controller
{

    public function test(UsersRole $userRole)
    {
        $isAdmin = $userRole->isAdmin();

        return view('blocks._test', ['data' => $isAdmin]);
    }
}
