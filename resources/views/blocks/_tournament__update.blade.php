@extends('layouts.app')
@section('content')
    <div class="container" style="width: 50%">
    <div class="uk-card uk-card-default uk-card-body" style="display: flex;justify-content: center;">
            <form action="{{route('updateTournament', $data->id)}}" method="post">
                @csrf
                <label for="name" style="margin: 5px">Введите название турнира</label>
                <input name="name" id="name" class="uk-input" type="text" value="{{$data->name}}"
                       style="margin: 5px">
                <div class="form-group">
                    <label for="from-date">Введите дату начала:</label>
                    <div class="input-group mb-4 constrained">
                        <input name="start_date" value="{{$data->start_date}}" type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend">
                    </div>
                </div>
                <div class="form-group">
                    <label for="from-date">Введите дату окончания:</label>
                    <div class="input-group mb-4 constrained">
                        <input name="end_date" value="{{$data->end_date}}" type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend">
                        <input type="hidden" name="type" value="{{$data->type}}">
                    </div>
                </div>
                <p class="uk-text-right">
                    <a href="{{route('tournaments.show', $data->id)}}">
                        <button class="uk-button uk-button-default uk-modal-close" type="button"
                                style="margin: 5px">Отмена
                        </button>
                    </a>
                        <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Изменить</button>
                </p>
            </form>
        </div>

    </div>
@endsection
