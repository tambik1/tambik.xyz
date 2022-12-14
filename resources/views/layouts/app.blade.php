<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tambik') }}</title>
    <link rel="shortcut icon" href="/img/icons/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/uikit.min.css" />
    <link rel="stylesheet" href="/css/uikit-rtl.min.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ratingTeam') }}">{{ __('Рейтинг') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tournaments.index') }}">{{ __('Турниры') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('showAllTeam') }}">{{ __('Команды') }}</a>
                        </li>
                    </ul>
                @endauth
                    <ul class="navbar-nav ms-auto">
                    @auth
                        @can('showAdminContent')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showUsers') }}">{{ __('Управление пользователями') }}</a>
                            </li>
                        @endcan
                    @endauth
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @include('blocks._messages')
        <main class="py-xxl-4" style="height: 100%;overflow: hidden;">
            @yield('content')
        </main>
    </div>
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
</body>
</html>
