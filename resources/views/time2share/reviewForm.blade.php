@extends('default')

@section('title')
    Profiel
@endsection
@section('content')

<article class="create-form a-popup">
    <form class="create-form__form" action="/users/{{$user->id}}/reviewed" method="POST"">
        @csrf
        <section class="create-form__section">
            <label for="name">Naam</label>
            <input class="create-form__input" name="name" id="name" type="text" required/>
        </section>

        <section class="create-form__section">
            <label for="description">Beschrijving</label>
            <textarea class="create-form__input create-form_input--big" name="description" id="description" type="text" required></textarea>
        </section>

        <section class="create-form__section">
            <label for="cijfer">Cijfer</label>
            <input type="number" class="create-form__input" name="score" id="score" required />
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Review plaatsen</button>
        </section>
    </form>
</article>

@endsection