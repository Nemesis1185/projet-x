@extends('layout')

@section('title','Accueil')

@section('content')

@foreach ($events as $event)
<ul>
    <li> {{ $event->name }} </li>
    <li> {{ $event->day }}</li>
</ul>
@endforeach

@endsection