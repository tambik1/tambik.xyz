@extends('layouts.app')
@section('content')
    <div class="content-container">
    <form class="uk-form-stacked" method="post" action='{{route('battleUpdateSubmit',$data['battleData']->id)}}' style="width: 70%;">
        @csrf
        <h3 class="selection_form__title">Обновление матча</h3>
        <div class="selection_form__select_section">
                <div class="selection_form_one_round__section">
                    <div class="uk-form-controls">
                        <label class="uk-form-label" for="form-stacked-select">Укажите первую команду <span>(Ранее: {{$data['battleData']->firstTeam->name ?? 'Не выбрано'}})</span></label>
                        <select name="first_team" class="uk-select">
                            @foreach($data['teamTournamentData'] as $team)
                                    <option value="{{$team->team_id}}">{{$team->firstTeam->name}}</option>
                            @endforeach
                        </select>
                        <label class="uk-form-label" for="form-stacked-select">Укажите количество очков у первой команды</label>
                        <input name="first_team_score" value="{{$data['battleData']->first_team_score}}" class="uk-input" type="text" placeholder="Очки" aria-label="Input">
                    </div>
                    <div class="uk-form-controls">
                        <label class="uk-form-label" for="form-stacked-select">Укажите вторую команду <span>(Ранее: {{$data['battleData']->secondTeam->name ?? 'Не выбрано'}})</span></label>
                        <select name="second_team" class="uk-select">
                            @foreach($data['teamTournamentData'] as $team)
                                <option value="{{$team->team_id}}">{{$team->secondTeam->name}}</option>
                            @endforeach
                        </select>
                        <label class="uk-form-label" for="form-stacked-select">Укажите количество очков у второй команды</label>
                        <input name="second_team_score" value="{{$data['battleData']->second_team_score}}" class="uk-input" type="text" placeholder="Очки" aria-label="Input">
                    </div>
                    <div class="uk-form-controls">
                        <label for="from-date">Укажите дату матча</label>
                        <div class="input-group mb-4 constrained">
                            <input name="date" value="{{$data['battleData']->date}}" type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend">
                        </div>
                    </div>
                </div>
        </div>
        <p class="uk-text-center">
            <a href="{{route('showBattle', $data['battleData']->tournament_id)}}">
                <button class="uk-button uk-button-default uk-modal-close" type="button"
                        style="margin: 5px">Отмена
                </button>
            </a>
            <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Добавить
            </button>
        </p>
    </form>
    </div>
@endsection
