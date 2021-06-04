@extends('default')

@section('title')
    Admin
@endsection


@section('content')

    <section class="search" id="js--searchBar">
        <input type="text" class="searchBar" placeholder="Zoek naar producten">
    </section>


    
    <details class="filter">
        <summary>Filtreer</summary>
            <section class="filter__grid">

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="keuken">Keuken</label>
                    <input class="u-cursor-pointer" id="keuken" name="keuken" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="gereedschap">Gereedschap</label>
                    <input class="u-cursor-pointer" id="gereedschap" name="gereedschap" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="kantoor">Kantoor</label>
                    <input class="u-cursor-pointer" id="kantoor" name="kantoor" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="elektronica">Elektronica</label>
                    <input class="u-cursor-pointer" id="elektronica" name="elektronica" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="hobby">Hobby</label>
                    <input class="u-cursor-pointer" id="hobby" name="hobby" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="reizen">Reizen</label>
                    <input class="u-cursor-pointer" id="reizen" name="reizen" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="sport">Sport</label>
                    <input class="u-cursor-pointer" id="sport" name="sport" type="checkbox"/>
                </section>

                <section class="filter__grid__items">
                    <label class="u-cursor-pointer" for="overig">Overig</label>
                    <input class="u-cursor-pointer" id="overig" name="overig" type="checkbox"/>
                </section>

                </section>
    </details>

    


    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)
    <li class="a-popup u-list-style-none gridCard" data-kind-of-product="{{$product->kind_of_product}}">
    <article>
        <header class="gridCard__header">
            <h2 class="gridCard__heading js--productnames">{{$product->name}}</h2>
            <h3 class="gridCard__category">{{$product->kind_of_product}}</h3>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{$product->image_path}}" alt="{{$product->description}}">
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text">{{$product->description}}</p>
        </section>
        <a class="gridCard__link u-colorblack" href="/admin/allproducts/delete/{{$product->id}}">verwijder dit product</a>
        
    </article>
</li>
    @endforeach
</ul>
<script src="/js/main.js"></script>
@endsection