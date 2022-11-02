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
                <p>ID: <span>{{$data->id}}</span></p>
            </div>
            @can('showAdminContent')
            <div class="uk-card-footer">

                    <a href="{{route('updateTeam', $data->id)}}"><button class="uk-button uk-button-primary">Изменить</button></a>
                    <button class="uk-button uk-button-danger" uk-toggle="target: #modal-delete-team" style="margin-left: 15px">Удалить</button>
            </div>
            @endcan

        </div>

        <div id="modal-delete-team" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                    <label for="name" style="margin: 5px">Вы действительно хотите удалить команду {{$data->name}}?</label>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button"
                                style="margin: 5px">Отмена
                        </button>
                        <a href="{{route('deleteTeam',$data->id)}}"><button class="uk-button uk-button-danger" type="submit" style="margin: 5px">Удалить</button></a>
                    </p>
            </div>
    </div>
@endsection
