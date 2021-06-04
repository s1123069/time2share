@extends('default')

@section('title')
    Time2Share
@endsection
@section('content')


<h1 class="homepage_header">welkom bij Time2Share</h1>
<p class="homepage_text">Bij Time2Share kunt u met toffe mensen spullen lenen. Leen spullen die u nodig heeft van anderen. Het wordt erg gewardeerd als u een aantal van uw spullen ook beschikbaar stelt! &#128516;</p>

@if (Auth::user() != null)

    @if (Auth::user()->blocked == 1)
    <p><a class="homepage_link" href="/products">geblokkeerd account</a></p>
    @else
    <a class="homepage_link" href="/products">Bekijk alle producten</a>
    @endif
    
@else
<a class="homepage_link" href="/products">Login</a>
@endif
@endsection