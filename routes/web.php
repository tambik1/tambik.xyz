<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Команда
Route::get('/teams', 'App\Http\Controllers\TeamController@showAllTeam')->name('showAllTeam');
Route::get('/teams/{id}', 'App\Http\Controllers\TeamController@detailTeam')->name('detailTeam');
Route::get('/teams/{id}/update', 'App\Http\Controllers\TeamController@updateTeam')->name('updateTeam');
Route::get('/teams/{id}/delete', 'App\Http\Controllers\TeamController@deleteTeam')->name('deleteTeam');
Route::post('/teams/{id}/update', 'App\Http\Controllers\TeamController@updateTeamSubmit')->name('updateTeamSubmit');

Route::post('/teams/create', 'App\Http\Controllers\TeamController@createTeam')->name('createTeam');

