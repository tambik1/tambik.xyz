<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambik</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/index_page.css">
    <link rel="shortcut icon" href="/img/icons/favicon.png" type="image/x-icon">
</head>
<body class="antialiased">
<div class="container__index">

    <!-- Starbackground -->
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>

    <!-- parallax text/java -->
    <div id="parallax">
        <div class="layer" data-depth="0.6">

            <!-- text -->
            <div class="some-space">
                <h1>Зайдешь?</h1>
            </div>

        </div>
        <div class="layer" data-depth="0.4">
            <div id="particles-js"></div>
        </div>

        <!-- Button -->
        <div class="layer" data-depth="0.3">
            <div class="some-more-space1">
                @if (Route::has('login'))
                    <div class="auth_block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Вперёд к соревнованиям</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Авторизация</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="/js/index_page.js"></script>
</div>
</body>
</html>


