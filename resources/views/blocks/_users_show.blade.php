@extends('layouts.app')
@section('content')
    <div class="content_container" style="display: flex; flex-direction: row; justify-content: center;">
        <div class="user_table_container">
                <table class="uk-table uk-table-middle uk-table-divider uk-table-justify">
                    <thead>
                    <tr class="uk-table uk-table-middle uk-table-divider">
                        <th class="uk-width-small uk-table-justify" style="text-align: left;">ФИО</th>
                        <th class="uk-width-small uk-table-justify" style="text-align: left;">Роль</th>
                        <th class="uk-width-small uk-table-justify" style="text-align: left;">Подробнее</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $user)
                        <tr>
                            <td class="uk-width-small">{{$user->name}}</td>
                            <td class="uk-width-small">
                                @if(($user->role->role === null))
                                    Пользователь
                                @else
                                    Администратор
                                @endif
                            </td>
                            <td class="uk-width-small"><a href="{{route('moderationUser', $user->id)}}"><button class="uk-button uk-button-primary uk-button-small" type="button">Редактировать</button></a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            <div class="pagination">
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection
