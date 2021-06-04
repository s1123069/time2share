@extends('default')

@section('title')
    Profiel
@endsection
@section('content')

<h1 class="dashboardHeader">{{$user->name}}</h1>

    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)

        <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$product->kind_of_product}}">
            <article>
                <header class="gridCard__header">
                    <h2 class="gridCard__heading js--productnames u-font-black">{{$product->name}}</h2>
                    <h3 class="gridCard__category u-font-black">{{$product->kind_of_product}}</h3>
                </header>
                <figure class="gridCard__figure">
                    <img class="gridCard__image" src="{{$product->image_path}}" alt="{{$product->description}}">
                </figure>
                <section class="gridCard__textSection u-flex-v-center">
                    <p class="gridCard__text u-font-black">{{$product->description}}</p>
                </section>
                
            </article>
        </li>
    @endforeach
</ul>

<a class="cardPageLink u-margin-top-4rem" href="/users/{{$user->id}}/review">Laat een review achter</a>

@foreach ($review as $review)
<li class="a-popup u-list-style-none reviewCard">
    <article class="review">
        <h2 class="review__header">{{$review->review_by}}</h2>
        <p class="review__description">{{$review->description}}</p>
        <h3 class="review__score">score: {{$review->score}}</h3>
    </article>
</li>
@endforeach

@endsection