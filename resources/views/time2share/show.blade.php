@extends('default')

@section('title')
    Maak een product aan!
@endsection
<article class="sushiCard a-popup">
    <figure class="sushiCard__figure">
    <img class="sushiCard__image" src="{{$product->image_path}}" alt="{{$product->name . ' ' . $product->kind_of_product}}"/>
    </figure>

    <section class="sushiCard__text">
        <p>{{$product->description}}</p>
    </section>

    <section class="sushiCard__btnSection">
        <button class="sushiCard__button"> Order Now </button>
        <a class="sushiCard__back_to_home" href="/products">Back to home</a>
    </section>
</article>
@section('content')
@endsection