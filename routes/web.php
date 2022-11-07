<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('home.index');

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
    'index', 'store', 'show', 'edit'
]);
Route::get('/tournaments/{tournamentId}/delete', 'App\Http\Controllers\TournamentController@deleteTournament')->name('deleteTournament');
Route::post('/tournaments/{tournament_id}/update', 'App\Http\Controllers\TournamentController@updateTournament')->name('updateTournament');
//Сетка
Route::get('/tournaments/{tournamentId}/battle', 'App\Http\Controllers\BattleController@showBattle')->name('showBattle');
Route::get('/tournaments/{tournamentId}/battle/team_selection', 'App\Http\Controllers\BattleController@teamSelection')->middleware('admin')->name('teamSelection');
Route::post('/tournaments/team_selection/submit', 'App\Http\Controllers\BattleController@teamSelectionSubmit')->middleware('admin')->name('teamSelectionSubmit');
Route::get('/battle/update/{battleId}', 'App\Http\Controllers\BattleController@battleUpdate')->middleware('admin')->name('battleUpdate');
Route::post('/battle/update/{battleId}', 'App\Http\Controllers\BattleController@battleUpdateSubmit')->middleware('admin')->name('battleUpdateSubmit');
//Пользователи
Route::get('/user','App\Http\Controllers\UserController@showUsers')->middleware('admin')->name('showUsers');
Route::get('/user/{id}','App\Http\Controllers\UserController@moderationUser')->middleware('admin')->name('moderationUser');
Route::post('/user/{id}','App\Http\Controllers\UserController@moderationUserSubmit')->middleware('admin')->name('moderationUserSubmit');
Route::get('/user/{id}/delete','App\Http\Controllers\UserController@deleteUser')->middleware('admin')->name('deleteUser');
//Статистика турнира
Route::get('/statistics/{tournamentId}','App\Http\Controllers\StatisticsController@statisticsTournament')->name('statisticsTournament');

