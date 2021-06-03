@extends('default')

@section('title')
    Maak een product aan!
@endsection


@section('content')

<h1 class="dashboardHeader">Mijn producten</h1>

    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($owned_products as $owned_products)

        <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$owned_products->kind_of_product}}">
            <article>
                <header class="gridCard__header">
                    <h2 class="gridCard__heading js--productnames">{{$owned_products->name}}</h2>
                    <h3 class="gridCard__category">{{$owned_products->kind_of_product}}</h3>
                </header>
                <figure class="gridCard__figure">
                    <img class="gridCard__image" src="{{$owned_products->image_path}}" alt="{{$owned_products->description}}">
                </figure>
                <section class="gridCard__textSection u-flex-v-center">
                    <p class="gridCard__text">{{$owned_products->description}}</p>
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
            
        </article>
        </li>
    @endforeach
</ul>
@endsection