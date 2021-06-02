@extends('default')

@section('title')
    Maak een product aan!
@endsection
@section('content')
<article class="card a-popup">
    <figure class="card__figure">
    <img class="card__image" src="{{$product->image_path}}" alt="{{$product->name . ' ' . $product->kind_of_product}}"/>
    </figure>


    <p>{{$product->name}}</p>
    <section class="card__text">
        <p>{{$product->description}}</p>
        <p>{{$product->borrow_days}}</p>
    </section>

    <section class="card__btnSection">

    @if ($product->owner == Auth::user()->id)
        <h1>Dit Item is van u</h1>
    @elseif ($product->borrowed == 0)
    <button class="card__button" onclick="window.location.assign('/products/{{$product->id}}/loan')"> Leen dit item </button>
    @else
    <h1>Dit item is geleend</h1>
    @endif
        

        <a class="card__back_to_home" href="/products">Terug naar alle producten</a>
    </section>
</article>
@endsection