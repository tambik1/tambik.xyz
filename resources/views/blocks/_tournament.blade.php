@extends('layouts.app')
@section('content')
    <div class="content-container">
        <div class="uk-card uk-card-default uk-width-1-2@m">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{$data->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <h4>ID: <span>{{$data->id}}</span></h4>
                <h4 class="uk-card-title">Дата начала: <span>{{date("d.m.Y", strtotime($data->start_date))}}</span></h4>
                <h4 class="uk-card-title">Дата окончания: <span>{{date("d.m.Y", strtotime($data->end_date))}}</span></h4>
                <h4 class="uk-card-title">Количество команд: <span>{{$data->type}}</span></h4>
                <a href="{{route('showBattle' , $data->id)}}"><button class="uk-button uk-button-primary">Перейти к матчам</button></a>
                <a href="{{route('statisticsTournament' , $data->id)}}" style="margin-left: 20px"><button class="uk-button uk-button-primary">Перейти к Статистике</button></a>
            </div>
            @can('showAdminContent')
                <div class="uk-card-footer">
                    <a href="{{route('tournaments.edit', $data->id)}}"><button class="uk-button uk-button-primary">Изменить</button></a>
                    <button class="uk-button uk-button-danger" uk-toggle="target: #modal-delete-tournament" style="margin-left: 15px">Удалить</button>
                </div>
            @endcan
        </div>

        <div id="modal-delete-tournament" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <label for="name" style="margin: 5px">Вы действительно хотите удалить турнир {{$data->name}} ?</label>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"
                            style="margin: 5px">Отмена
                    </button>
                    <a href="{{route('deleteTournament',$data->id)}}"><button class="uk-button uk-button-danger" type="submit" style="margin: 5px">Удалить</button></a>
                </p>
            </div>
        </div>
@endsection
