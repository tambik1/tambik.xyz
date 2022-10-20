<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teams', 'App\Http\Controllers\TeamController@showAllTeam')->name('showAllTeam');
Route::post('/teams/create', 'App\Http\Controllers\TeamController@createTeam')->name('createTeam');
//проверка пост запроса
//Route::post('/teams/create', function (){dd(Request::all());})->name('createTeam');
