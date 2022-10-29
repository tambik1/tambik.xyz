@extends('layouts.app')
@section('content')
    <header class="hero">
        <div class="hero-wrap">
            <h1 id="headline">Название турнира из объекта турнира</h1>
            <p class="year"> Дата начала из турнира - дата окончания турнира </p>
        </div>
    </header>


    <section id="bracket">
        <div class="container">
            <div class="split split-one">
                <div class="round round-one current">
                    <div class="round-details">1/16<br/></div>

                    <ul class="matchup">
                        {{--round #1--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Duke<span class="score">76</span></li>
                        <li class="team team-bottom">Virginia<span class="score">82</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #2--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Wake Forest<span class="score">64</span></li>
                        <li class="team team-bottom">Clemson<span class="score">56</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #3--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">North Carolina<span class="score">68</span></li>
                        <li class="team team-bottom">Florida State<span class="score">54</span></li>
                    </ul>
                    <ul class="matchup">
                        {{--round #4--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">NC State<span class="score">74</span></li>
                        <li class="team team-bottom">Maryland<span class="score">92</span></li>
                    </ul>
                    <ul class="matchup">
                        {{--round #5--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Georgia Tech<span class="score">78</span></li>
                        <li class="team team-bottom">Georgia<span class="score">80</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #6--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Auburn<span class="score">64</span></li>
                        <li class="team team-bottom">Florida<span class="score">63</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #7--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Kentucky<span class="score">70</span></li>
                        <li class="team team-bottom">Alabama<span class="score">59</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #8--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Vanderbilt<span class="score">64</span></li>
                        <li class="team team-bottom">Gonzaga<span class="score">68</span></li>
                    </ul>
                </div>	<!-- END ROUND ONE -->

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
                </div>	<!-- END ROUND TWO -->

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
                </div>	<!-- END ROUND TWO -->
                <div class="round round-one current">
                    <div class="round-details">1/16<br/></div>

                    <ul class="matchup">
                        {{--round #9--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Minnesota<span class="score">62</span></li>
                        <li class="team team-bottom">Northwestern<span class="score">54</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #10--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Michigan<span class="score">68</span></li>
                        <li class="team team-bottom">Iowa<span class="score">66</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #11--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Illinois<span class="score">64</span></li>
                        <li class="team team-bottom">Wisconsin<span class="score">56</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #12--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Purdue<span class="score">36</span></li>
                        <li class="team team-bottom">Boise State<span class="score">40</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #13--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Penn State<span class="score">38</span></li>
                        <li class="team team-bottom">Indiana<span class="score">44</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #14--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Ohio State<span class="score">52</span></li>
                        <li class="team team-bottom">VCU<span class="score">80</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #15--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">USC<span class="score">58</span></li>
                        <li class="team team-bottom">Cal<span class="score">59</span></li>
                    </ul>

                    <ul class="matchup">
                        {{--round #16--}}
                        <div class="round-details__date"><span class="date">March 16</span></div>
                        <li class="team team-top">Virginia Tech<span class="score">74</span></li>
                        <li class="team team-bottom">Dartmouth<span class="score">111</span></li>
                    </ul>
                </div>	<!-- END ROUND ONE -->
            </div>
        </div>
    </section>
@endsection
