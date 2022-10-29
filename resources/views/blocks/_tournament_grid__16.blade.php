@extends('layouts.app')
@section('content')
    <header class="hero">
        <div class="hero-wrap">
            <h1 id="headline">Название турнира из объекта турнира</h1>
            <p class="year"> Дата начала из турнира - дата окончания турнира </p>
        </div>
    </header>


    <section id="bracket">
        <div class="container__grid">
            <div class="split split-one">

                <div class="round round-two">
                    <div class="round-details">1/8<br/></div>

                    <ul class="matchup">
                        {{--round #17--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #18--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #19--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #20--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>
                </div>	<!-- END ROUND ONE -->

                <div class="round round-three">
                    <div class="round-details">1/4<br/></div>

                    <ul class="matchup">
                        {{--round #25--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #26--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>
                </div>	<!-- END ROUND THREE -->
            </div>

            <div class="champion">
                <div class="semis-l">
                    {{--round #29--}}
                    <div class="round-details">Полуфинал<br/><span class="date">March 26-28</span></div>
                    <ul class ="matchup championship">
                        <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
                    </ul>
                </div>
                <div class="final">
                    {{--round #31--}}
                    <i class="fa fa-trophy"></i>
                    <div class="round-details">Финал <br/><span class="date">March 30 - Apr. 1</span></div>
                    <ul class ="matchup championship">
                        <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
                    </ul>
                </div>
                <div class="semis-r">
                    {{--round #30--}}
                    <div class="round-details">Полуфинал<br/><span class="date">March 26-28</span></div>
                    <ul class ="matchup championship">
                        <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
                    </ul>
                </div>
            </div>


            <div class="split split-two">


                <div class="round round-three">
                    <div class="round-details">1/4<br/></div>
                    <ul class="matchup">
                        {{--round #27--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>
                    <ul class="matchup">
                        {{--round #28--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>
                </div>	<!-- END ROUND THREE -->

                <div class="round round-two">
                    <div class="round-details">1/8<br/></div>

                    <ul class="matchup">
                        {{--round #21--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #22--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #23--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #24--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                    </ul>
                </div>	<!-- END ROUND ONE -->

            </div>
        </div>
    </section>
@endsection
