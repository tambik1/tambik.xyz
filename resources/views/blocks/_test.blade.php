@extends('layouts.app')
@section('content')
    <div class="content_container">
        @can('showAdminContent')
            <h2>Это должен видеть только админ</h2>
            <h1>{{dd($data)}}</h1>
        @endcan

    </div>
@endsection
