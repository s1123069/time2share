@extends('default')

@section('title')
    Maak een product aan!
@endsection
<article class="sushiCard a-popup">
    <figure class="sushiCard__figure">
    <img class="sushiCard__image" src="{{$product->image_path}}" alt="{{$product->name . ' ' . $product->kind_of_product}}"/>
    </figure>


    <p>{{$product->name}}</p>
    <section class="sushiCard__text">
        <p>{{$product->description}}</p>
        <p>{{$product->borrow_days}}</p>
    </section>

    <section class="sushiCard__btnSection">
        <button class="sushiCard__button" onclick="window.location.assign('/products/{{$product->id}}/loan')"> Leen dit item </button>
        <a class="sushiCard__back_to_home" href="/products">Terug naar alle producten</a>
    </section>
</article>
@section('content')
@endsection