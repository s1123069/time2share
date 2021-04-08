@extends('default')

@section('title')
    Maak een product aan!
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/products/create/confirm" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="create-form__section">
                <label for="name"> Naam </label>
                <input class="create-form__input" name="name" id="name" type="text" required/>
            </section>
            
            <section class="create-form__section">
                <label for="kind_of_product"> Soort </label>
                <select class="create-form__input" name="kind_of_product" id="kind_of_product">
                    @foreach($kind_of_product as $kind_of_product)
                        <option value="{{$kind_of_product->kind_of_product}}">{{$kind_of_product->kind_of_product}}</option>
                    @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="description"> Beschrijving </label>
                <textarea class="create-form__input create-form__input--big" name="description" id="description" type="text" required></textarea>
            </section>

            <section class="create-form__section">
                <label for="borrow_days"> Hoeveel dagen wil je dit item maximaal uitlenen: </label>
                <input class="create-form__input" name="borrow_days" id="borrow_days" type="number" required/>
            </section>

            <section class="create-form__section">
                <label for="image"> Afbeelding </label><br />
                <input type="file" id="image" name="image" class="" required>
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Product aanmaken</button>
            </section>
        </form>
    </article>
@endsection