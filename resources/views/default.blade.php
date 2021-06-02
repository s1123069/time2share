<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
    <button class="header__button u-button-hover-blue" type="button" onclick=window.location="{{ url("/") }}">Time2Share</button>
    @if (Auth::user() != null)
        <form class="header__button_form u-button-grid-column-8" method="POST" action="/logout">
            @csrf
            <button class="header__button u-button u-button--primary">Uitloggen</button>
        </form>
        <button class="header__button u-button-grid-column-2" type="button" onclick=window.location="{{ url("products") }}">alle producten</button>
        <button class="header__button u-button-grid-column-3" type="button" onclick=window.location="{{ url("myproducts") }}">dashboard</button>
        @else
        <button class="header__button u-button-grid-column-8" type="button" onclick=window.location="{{ route("login") }}">Login</button>
    @endif
    </header>
    
    <section class="content">
        @yield('content')
    </section>

    <section class="mobile_menu">
    <button class="header__button u-button-hover-blue" type="button" onclick=window.location="{{ url("/") }}">Time2Share</button>
    @if (Auth::user() != null)
        <form class="header__button_form" method="POST" action="/logout">
            @csrf
            <button class="header__button u-button u-button--primary">Uitloggen</button>
        </form>
        <button class="header__button" type="button" onclick=window.location="{{ url("products") }}">alle producten</button>
        <button class="header__button" type="button" onclick=window.location="{{ url("myproducts") }}">dashboard</button>
        @else
        <button class="header__button" type="button" onclick=window.location="{{ route("login") }}">Login</button>
    @endif
    </section>
    
</body>
</html>