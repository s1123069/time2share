@extends('default')

@section('title')
    Maak een product aan!
@endsection

@section('content')

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)
    <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$product->kind_of_product}}">
    <article>
        <header class="gridCard__header u-flex-v-center">
            <h2 class="gridCard__heading">{{$product->name}}</h2>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{$product->image_path}}" alt="{{$product->description}}">
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text">{{$product->description}}</p>
            <a class="" href="/products/{{$product->id}}">Bekijk dit project</a>
        </section>
        
    </article>
</li>
    @endforeach
</ul>

@endsection