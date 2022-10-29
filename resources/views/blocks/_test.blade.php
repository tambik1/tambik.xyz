@extends('layouts.app')
@section('content')
    <div class="content_container">
{{--        @can('showAdminContent')--}}
{{--            <h2>Это должен видеть только админ</h2>--}}
{{--            <h1>{{dd($data)}}</h1>--}}
{{--            <h1>{{$data->range}}</h1>--}}
{{--        @endcan--}}

        <?php
            $i = 1;
            while ($i <= $data)
            {
             echo "$i"."</br>";
                $i++;
            }
            ?>

    </div>
@endsection
