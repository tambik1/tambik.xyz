@extends('layouts.app')
@section('content')
    <div class="content-container">
        <h1 class="teams__title" style="text-align: center">Команды</h1>

        <div class="teams_container">
            <div class="teams_create_btn_container">
                <button class="uk-button uk-button-secondary" uk-toggle="target: #modal-create-team" type="button"
                        style="border-radius: 5px">Создать команду
                </button>
            </div>

            <div id="modal-create-team" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <form action="{{route('createTeam')}}" method="post">
                        @csrf
                        <label for="name" style="margin: 5px">Введите название команды</label>
                        <input name="name" id="name" class="uk-input" type="text" placeholder="Название команды"
                               style="margin: 5px">
                        <p class="uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button"
                                    style="margin: 5px">Отмена
                            </button>
                            <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Создать
                            </button>
                        </p>
                    </form>
                </div>
            </div>

            @foreach($data as $team)
                <div class="teams_card_container">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body"
                         style="border-radius: 20px; display: flex; flex-direction: column; align-items: center;">
                        <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">ID:
                            <span>{{$team->id}}</span></h3>
                        <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">
                            {{$team->name}}</h3>
                        <a class="uk-button uk-button-primary" href="{{route('detailTeam', $team->id)}}">Подробнее</a>
                    </div>
                </div>
            @endforeach
    </div>

@endsection

