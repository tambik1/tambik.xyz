<?php

namespace App\Http\Controllers;

use App\Models\UsersRole;
use Illuminate\Support\Facades\Config;


//Данный контроллер реализован специально, что бы проводить разные тесты
class TestController extends Controller
{

    public function test()
    {

        $config = Config::get('grid');
        $typeData = $config[16]['range'];

        return view('blocks._test', ['data' => $typeData]);
    }
}
