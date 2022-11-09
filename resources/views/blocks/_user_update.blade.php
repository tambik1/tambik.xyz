@extends('layouts.app')
@section('content')
    <div class="content-container">
        <div class="moderation_user_container" style="display: flex;flex-direction: column;">
            <form action="{{route('moderationUserSubmit',$data->id)}}" method="post">
                @csrf
                <label for="name" style="margin: 5px">Имя пользователя</label>
                <input name="name" id="name" class="uk-input" type="text" value="{{$data->name}}"
                       style="margin: 5px">
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label>Администратор<input name="role" value="1" class="uk-checkbox" type="checkbox"style="margin-left: 5px"
                                               @if((int)$data->role->role === 1)
                                                   checked
                            @endif
                        >
                    </label>
                </div>
                <p class="uk-text-center">
                    <a href="{{route('showUsers')}}">
                        <button class="uk-button uk-button-default uk-modal-close" type="button"
                                style="margin: 5px">Отмена
                        </button>
                    </a>
                    <button class="uk-button uk-button-primary" type="submit" style="margin: 5px">Обновить
                    </button>
                </p>
            </form>
            <div class="delete_user_container" style="display: flex; justify-content: center;">
                <div class="delete_user_button" uk-toggle="target: #delete-user">
                    <button class="uk-button uk-button-danger">Удалить</button>
                </div>
                <div id="delete-user" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">
                        <h2 class="uk-modal-title">Вы действительно хотите удалить пользователя?</h2>
                        <div class="uk-modal-footer uk-text-center">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Отмена</button>
                            <a href="{{route('deleteUser',$data->id)}}" style="margin-left: 15px"><button class="uk-button uk-button-danger" type="button">Удалить</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
