@extends('layouts.app')
@section('content')
    <div class="content_container" style="display: flex; flex-direction: row; justify-content: center;">
        <div class="rating_table_container">
            <table class="uk-table uk-table-middle uk-table-divider uk-table-justify">
                <thead>
                <tr class="uk-table uk-table-middle uk-table-divider">
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Место</th>
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Команда</th>
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Общая результативность за все матчи</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['ratingData'] as $key => $value)
                    <tr>
                        <td class="uk-width-small">{{$key+1}}</td>
                        <td class="uk-width-small">{{$value->name}}</td>
                        <td class="uk-width-small">{{$value->score ?? 0}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
