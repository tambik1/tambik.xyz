@extends('layouts.app')
@section('content')
    <header class="hero">
        <div class="hero-wrap">
            <h1 id="headline">{{$data['tournamentData']->name}}</h1>
            <p class="year"> {{date("d.m.Y", strtotime($data['tournamentData']->start_date))}} - {{date("d.m.Y", strtotime($data['tournamentData']->end_date))}} </p>
        </div>
    </header>
    <section id="bracket">
        <div class="container__grid">
            <div class="split split-one">

                <div class="round round-three">
                    <div class="round-details">1/4<br/></div>
                    @foreach($data['configGrid']['1\4 left'] as $round)
                        <ul class="matchup">
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $round)
                                    <div class="round-details__date"><span class="date">
                                            @if($value->date === null)
                                                Без даты
                                            @else
                                                {{date("d.m.Y", strtotime($value->date))}}
                                            @endif
                                        </span>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $round)
                                    <li class="team team-top">{{$value->firstTeam->name ?? 'Не указано'}}<span class="score">{{$value->first_team_score ?? '0'}}</span></li>
                                    <li class="team team-bottom">{{$value->secondTeam->name ?? 'Не указано'}}<span class="score">{{$value->second_team_score ?? '0'}}</span></li>
                                @endif
                            @endforeach
                            @can('showAdminContent')
                                @foreach($data['roundData'] as $value)
                                    @if($value->position === $round)
                                        <div class="matchup_update__button"><a href="{{route('battleUpdate',$value->id)}}"><button class="uk-button uk-button-secondary" type="button" style="border-radius: 5px;position: relative " aria-expanded="false">Изменить</button></a></div>
                                    @endif
                                @endforeach
                            @endcan
                        </ul>
                    @endforeach
                </div>
            </div>

            <div class="champion">
                <div class="semis-l">
                    <div class="round-details">Полуфинал<br/>
                        @foreach($data['roundData'] as $value)
                            @if($value->position === $data['configGrid']['1\2 up'])
                                <div class="round-details__date"><span class="date">
                                        @if($value->date === null)
                                            Без даты
                                        @else
                                            {{date("d.m.Y", strtotime($value->date))}}
                                        @endif
                                        </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <ul class="matchup championship">
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $data['configGrid']['1\2 up'])
                                    <li class="team team-top">{{$value->firstTeam->name ?? 'Не указано'}}<span class="score">{{$value->first_team_score ?? '0'}}</span></li>
                                    <li class="team team-bottom">{{$value->secondTeam->name ?? 'Не указано'}}<span class="score">{{$value->second_team_score ?? '0'}}</span></li>
                                @endif
                            @endforeach
                            @can('showAdminContent')
                                @foreach($data['roundData'] as $value)
                                    @if($value->position === $data['configGrid']['1\2 up'])
                                        <div class="matchup_update__button"><a href="{{route('battleUpdate',$value->id)}}"><button class="uk-button uk-button-secondary" type="button" style="border-radius: 5px;position: relative " aria-expanded="false">Изменить</button></a></div>
                                    @endif
                                @endforeach
                            @endcan
                        </ul>
                </div>
                <div class="final">
                    <div class="round-details">Финал <br/>
                        @foreach($data['roundData'] as $value)
                            @if($value->position === $data['configGrid']['final'])
                                <div class="round-details__date"><span class="date">
                                            @if($value->date === null)
                                            Без даты
                                        @else
                                            {{date("d.m.Y", strtotime($value->date))}}
                                        @endif
                                        </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <ul class ="matchup championship">
                        @foreach($data['roundData'] as $value)
                            @if($value->position === $data['configGrid']['final'])
                                <li class="team team-top">{{$value->firstTeam->name ?? 'Не указано'}}<span class="score">{{$value->first_team_score ?? '0'}}</span></li>
                                <li class="team team-bottom">{{$value->secondTeam->name ?? 'Не указано'}}<span class="score">{{$value->second_team_score ?? '0'}}</span></li>
                            @endif
                        @endforeach
                        @can('showAdminContent')
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $data['configGrid']['final'])
                                    <div class="matchup_update__button"><a href="{{route('battleUpdate',$value->id)}}"><button class="uk-button uk-button-secondary" type="button" style="border-radius: 5px;position: relative " aria-expanded="false">Изменить</button></a></div>
                                @endif
                            @endforeach
                        @endcan
                    </ul>
                </div>
                <div class="semis-r">
                    <div class="round-details">Полуфинал<br/>
                        @foreach($data['roundData'] as $value)
                            @if($value->position === $data['configGrid']['1\2 down'])
                                <div class="round-details__date"><span class="date">
                                            @if($value->date === null)
                                            Без даты
                                        @else
                                            {{date("d.m.Y", strtotime($value->date))}}
                                        @endif
                                        </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <ul class="matchup championship">
                        @foreach($data['roundData'] as $value)
                            @if($value->position === $data['configGrid']['1\2 down'])
                                <li class="team team-top">{{$value->firstTeam->name ?? 'Не указано'}}<span class="score">{{$value->first_team_score ?? '0'}}</span></li>
                                <li class="team team-bottom">{{$value->secondTeam->name ?? 'Не указано'}}<span class="score">{{$value->second_team_score ?? '0'}}</span></li>
                            @endif
                        @endforeach
                        @can('showAdminContent')
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $data['configGrid']['1\2 down'])
                                    <div class="matchup_update__button"><a href="{{route('battleUpdate',$value->id)}}"><button class="uk-button uk-button-secondary" type="button" style="border-radius: 5px;position: relative " aria-expanded="false">Изменить</button></a></div>
                                @endif
                            @endforeach
                        @endcan
                    </ul>
                </div>
            </div>


            <div class="split split-two">
                <div class="round round-three">
                    <div class="round-details">1/4<br/></div>
                    @foreach($data['configGrid']['1\4 right'] as $round)
                        <ul class="matchup">
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $round)
                                    <div class="round-details__date"><span class="date">
                                            @if($value->date === null)
                                                Без даты
                                            @else
                                                {{date("d.m.Y", strtotime($value->date))}}
                                            @endif
                                        </span>
                                    </div>                                @endif
                            @endforeach
                            @foreach($data['roundData'] as $value)
                                @if($value->position === $round)
                                    <li class="team team-top">{{$value->firstTeam->name ?? 'Не указано'}}<span class="score">{{$value->first_team_score ?? '0'}}</span></li>
                                    <li class="team team-bottom">{{$value->secondTeam->name ?? 'Не указано'}}<span class="score">{{$value->second_team_score ?? '0'}}</span></li>
                                @endif
                            @endforeach
                            @can('showAdminContent')
                                @foreach($data['roundData'] as $value)
                                    @if($value->position === $round)
                                        <div class="matchup_update__button"><a href="{{route('battleUpdate',$value->id)}}"><button class="uk-button uk-button-secondary" type="button" style="border-radius: 5px;position: relative " aria-expanded="false">Изменить</button></a></div>
                                    @endif
                                @endforeach
                            @endcan
                        </ul>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
