@extends('default')

@section('title')
    Producten
@endsection


@section('content')

    <details class="filter">
        <summary>Filtreer</summary>
            <section class="filter__grid">
                
                <section class="filter__grid__items">
                    <label class="" for="keuken">Keuken</label>
                    <input class="" id="keuken" name="keuken" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="gereedschap">Gereedschap</label>
                    <input class="" id="gereedschap" name="gereedschap" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="kantoor">Kantoor</label>
                    <input class="" id="kantoor" name="kantoor" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="elektronica">Elektronica</label>
                    <input class="" id="elektronica" name="elektronica" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="hobby">Hobby</label>
                    <input class="" id="hobby" name="hobby" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="reizen">Reizen</label>
                    <input class="" id="reizen" name="reizen" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="sport">Sport</label>
                    <input class="" id="sport" name="sport" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="" for="overig">Overig</label>
                    <input class="" id="overig" name="overig" type="checkbox"/>
                </section>

                </section>
    </details>

    


    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)
    <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$product->kind_of_product}}">
    <article>
        <header class="gridCard__header">
            <h2 class="gridCard__heading">{{$product->name}}</h2>
            <h3 class="gridCard__category">{{$product->kind_of_product}}</h3>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{$product->image_path}}" alt="{{$product->description}}">
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text">{{$product->description}}</p>
        </section>
        <a class="gridCard__link" href="/products/{{$product->id}}">Bekijk dit project</a>
        
    </article>
</li>
    @endforeach
</ul>
<script src="/js/main.js"></script>
@endsection