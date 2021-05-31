<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>
<body>
<a class="sushiCard__back_to_home" href="/">Homepagina</a>
@if (Auth::user() != null)
    <form method="POST" action="/logout">
        @csrf
        <button class="u-button u-button--primary">Uitloggen</button>
    </form>
    <button type="button" onclick=window.location="{{ url("myproducts") }}">dashboard</button>
    <button type="button" onclick=window.location="{{ url("products") }}">alle producten</button>
    @else
    <button type="button" onclick=window.location="{{ url("products") }}">Login</button>
@endif

    
    @yield('content')
</body>
</html>