@extends('layout')

@section('title','Accueil')

@section('content')

<h1> profil de l'utilisateur</h1>

<div>
    <p class="pseudo"> <strong>pseudo</strong>: {{ auth()->user()->username }}</p>
    <p class="mail"> <strong>e-mail</strong>:{{ auth()->user()->email }}</p>
</div>
</article>

</section>


@endsection
