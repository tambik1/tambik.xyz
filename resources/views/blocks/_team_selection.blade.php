@extends('layouts.app')
@section('content')
    <div class="container_team_selection">
        <div class="team_selection_form_container">
            <form class="uk-form-stacked" method="post" action='{{route('teamSelectionSubmit')}}'>
                @csrf
                <h3 class="selection_form__title">Для отображения сетки турнира необходимо заполнить команды, которые
                    учавствуют в турнире, позже список участников можно будет изменить.</h3>
                <div class="selection_form__select_section">
                    @for($i = 1; $i <= $data['typeTournament']; $i++)
                        <div class="selection_form_one_round__section">
                            <div class="uk-form-controls">
                                <label class="uk-form-label" for="form-stacked-select">{{$i}} команда в матче</label>
                                <select name="team_id__{{$i}}" class="uk-select">
                                    @foreach($data['teams'] as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endfor()
                        <input type="hidden" name="tournament_id" value="{{$data['tournamentId']}}">
                </div>
                <p class="uk-text-center">
                    <a href="{{route('tournaments.show',[$data['tournamentId']])}}">
                        <button class="uk-button uk-button-default uk-modal-close" type="button"
                                style="margin: 5px">Отмена
                        </button>
                    </a>
                    <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Добавить
                    </button>
                </p>
            </form>
        </div>
    </div>
@endsection
