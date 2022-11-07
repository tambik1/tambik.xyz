@extends('layouts.app')
@section('content')
    <div class="content_container" style="display: flex; flex-direction: row; justify-content: center;">
        <div class="user_table_container">
            <table class="uk-table uk-table-middle uk-table-divider uk-table-justify">
                <thead>
                <tr class="uk-table uk-table-middle uk-table-divider">
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Команда</th>
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Лучшая результативность за матч</th>
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Общая результативность</th>
                    <th class="uk-width-small uk-table-justify" style="text-align: left;">Средняя результативность </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['teamData'] as $team)
                    <tr>
                        <td class="uk-width-small">{{$team->firstTeam->name}}</td>
                        @foreach($data['maxScore'] as $value)
                            @if($team->team_id === $value->id)
                                <td class="uk-width-small">{{$value->best ?? 0}}</td>
                            @endif
                        @endforeach
                        @foreach($data['sumScore'] as $value)
                            @if($team->team_id === $value->id)
                                <td class="uk-width-small">{{$value->sum_score ?? 0}}</td>
                            @endif
                        @endforeach
                        @foreach($data['avgScore'] as $value)
                            @if($team->team_id === $value->id)
                                <td class="uk-width-small">{{number_format($value->avg_score, 2) ?? 0.00}}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
