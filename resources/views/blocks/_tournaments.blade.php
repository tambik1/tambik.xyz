@extends('layouts.app')
@section('content')
    <h1 class="tournaments__title" style="text-align: center">Турниры</h1>
    <div class="content-container">
        <div class="tournaments_container">
            @can('showAdminContent')
                <div class="tournaments_create_btn_container">
                    <button class="uk-button uk-button-secondary" uk-toggle="target: #modal-create-tournaments" type="button"
                            style="border-radius: 5px">Создать турнир
                    </button>
                </div>
{{--{{dd($type)}}--}}
                <div id="modal-create-tournaments" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">
                        <form action="{{route('tournaments.store')}}" method="post">
                            @csrf
                            <label for="name" style="margin: 5px">Введите название турнира</label>
                            <input name="name" id="name" class="uk-input" type="text" placeholder="Название турнира"
                                   style="margin: 5px" required>
                            <div class="form-group">
                                <label for="from-date">Введите дату начала:</label>
                                <div class="input-group mb-4 constrained">
                                    <input name="start_date" type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-date">Введите дату окончания:</label>
                                <div class="input-group mb-4 constrained">
                                    <input name="end_date" type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="type" for="from-date">Выберете количество команд в турнире: </label>
                                <select name="type" class="uk-select" aria-label="Select">
                                    @foreach($type as $value)
                                        <option>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
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
            @endcan

            @foreach($data as $tournament)
                <div class="tournaments_card_container">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body"
                         style="border-radius: 20px; display: flex; flex-direction: column; align-items: center;">
                        <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">{{$tournament->name}}</h3>
                        <a class="uk-button uk-button-primary" href="{{route('tournaments.show', $tournament->id)}}">Подробнее</a>
                    </div>
                </div>
            @endforeach
            <div class="pagination">
                {{$data->links()}}
            </div>
        </div>

@endsection
