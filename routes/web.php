<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
//Для тестов
Route::get('/test', 'App\Http\Controllers\TestController@test')->name('test');

Route::get('/','App\Http\Controllers\IndexController@index')->name('home.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Команда
Route::get('/teams', 'App\Http\Controllers\TeamController@showAllTeam')->name('showAllTeam');
Route::get('/teams/{id}', 'App\Http\Controllers\TeamController@detailTeam')->name('detailTeam');
Route::get('/teams/{id}/update', 'App\Http\Controllers\TeamController@updateTeam')->middleware('admin')->name('updateTeam');
Route::get('/teams/{id}/delete', 'App\Http\Controllers\TeamController@deleteTeam')->middleware('admin')->name('deleteTeam');
Route::post('/teams/{id}/update', 'App\Http\Controllers\TeamController@updateTeamSubmit')->middleware('admin')->name('updateTeamSubmit');
Route::post('/teams/create', 'App\Http\Controllers\TeamController@createTeam')->middleware('admin')->name('createTeam');
//Турниры
Route::resource('tournaments', TournamentController::class)->only([
    'index', 'store','show','edit'
]);
Route::get('tournaments/{id}/delete',  'App\Http\Controllers\TournamentController@deleteTournament')->middleware('admin')->name('deleteTournament');
Route::post('/tournaments/{id}/update', 'App\Http\Controllers\TournamentController@updateTournament')->middleware('admin')->name('updateTournament');
//Сетка
Route::get('tournaments/{id}/battle', 'App\Http\Controllers\BattleController@showBattle')->name('showBattle');
