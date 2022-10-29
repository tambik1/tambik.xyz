<?php

namespace App\Http\Controllers;

use App\Models\UsersRole;
use Illuminate\Support\Facades\Config;


//Данный контроллер реализован специально, что бы проводить разные тесты
class TestController extends Controller
{

    public function test()
    {

        $range = Config::get('grid');

        return view('blocks._test', ['data' => $range]);
    }
}
