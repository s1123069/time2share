@extends('default')

@section('title')
    Admin
@endsection


@section('content')

    <ul class="userDeleteLijst">
    @foreach($user as $user)
        <li class=" a-popup u-list-style-none userDeleteLijst__kaartjes u-scolor">
            <article>
                <h1 class="userDeleteLijst__kaartjes__header">{{$user->name}}</h1>
                <p class="userDeleteLijst__kaartjes__email">{{$user->email}}</p>
                <a class="userDeleteLijst__kaartjes__knop u-colorblack" href="/admin/allusers/disable/{{$user->id}}">verwijder gebruiker</a>
            </article>
        </li>
    @endforeach
</ul>
@endsection