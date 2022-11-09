@extends('layouts.app')
@section('content')
    <div class="content-container">
        <form action="{{route('updateTeamSubmit', $data->id)}}" method="post">
            @csrf
            <label for="name" style="margin: 5px">Измените название команды</label>
            <input name="name" id="name" class="uk-input" type="text" value="{{$data->name}}"
                   style="margin: 5px">
            <p class="uk-text-right">
                <a href="{{route('detailTeam', $data->id)}}">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"
                            style="margin: 5px">Отмена
                    </button>
                </a>
                <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Обновить
                </button>
            </p>
        </form>
    </div>
@endsection
