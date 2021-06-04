@extends('default')

@section('title')
    Maak een product aan!
@endsection


@section('content')

<h1 class="dashboardHeader">Welkom {{$user_name}}</h1>
<h1 class="dashboardHeader">Mijn producten</h1>

@if (Auth::user()->role == "Admin")
    <a class="cardPageLink u-scolor" href="/admin/allproducts">Verwijder Producten</a>
    <a class="cardPageLink u-scolor" href="/admin/allusers">Verwijder Gebruikers</a>
@endif



<a class="cardPageLink" href="/products/create">Voeg product toe</a>
    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($owned_products as $owned_products)

        <li class="a-popup u-list-style-none gridCard u-pcolor" data-kind-of-product="{{$owned_products->kind_of_product}}">
            <article>
                <header class="gridCard__header">
                    <h2 class="gridCard__heading js--productnames u-font-black">{{$owned_products->name}}</h2>
                    <h3 class="gridCard__category u-font-black">{{$owned_products->kind_of_product}}</h3>
                </header>
                <figure class="gridCard__figure">
                    <img class="gridCard__image" src="{{$owned_products->image_path}}" alt="{{$owned_products->description}}">
                </figure>
                <section class="gridCard__textSection u-flex-v-center">
                    <p class="gridCard__text u-font-black">{{$owned_products->description}}</p>
                </section>                
            </article>
        </li>
    @endforeach
</ul>


<h1 class="dashboardHeader u-dashboardHeader-margin-top" >mijn geleende producten</h1>

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($loaned_products as $loaned_products)
        <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$loaned_products->kind_of_product}}">
        <article>
            <header class="gridCard__header">
                <h2 class="gridCard__heading">{{$loaned_products->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$loaned_products->image_path}}" alt="{{$loaned_products->description}}">
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$loaned_products->description}}</p>
            </section>
            @if (($loaned_products->borrowed == 1) && ($loaned_products->give_back == 0))
                <a class="gridCard__link" href="/myproducts/return/{{$loaned_products->id}}">Retourneer</a>
           @endif
            
        </article>
        </li>

    @endforeach
</ul>



<h1 class="dashboardHeader u-dashboardHeader-margin-top">Mijn uitgeleende producten</h1>

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($loaned_out_products as $loaned_out_products)
        <li class="a-popup u-list-style-none gridCard u-tcolor" data-kind-of-product="{{$loaned_out_products->kind_of_product}}">
        <article>
            <header class="gridCard__header">
                <h2 class="gridCard__heading">{{$loaned_out_products->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$loaned_out_products->image_path}}" alt="{{$loaned_out_products->description}}">
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$loaned_out_products->description}}</p>
            </section>
            @if (($loaned_out_products->borrowed == 1) && ($loaned_out_products->give_back == 1))
                <a class="gridCard__link u-scolor" href="/myproducts/accepted/{{$loaned_out_products->id}}">neem terug</a>
           @endif
        </article>
        </li>
       
    @endforeach
</ul>


@endsection