@extends('layout')

@section('title','Administration')

@section('content')


<h1>Page d'administration</h1>
    
        <a href="{{ route('create') }}"><button class="btn btn-primary">Ajouter</button></a>
            <table class="table table-striped">
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->category->name }}</td>
                    <td>{{ $event->user->username }}</td>
                    <td>{{ $event->created_at->format('d/m/Y H:i') }}</td>
                    <td><a href="{{ route('edit', ['id'=>$event->id]) }}">Modifier</a>|<a href="{{ route('delete', ['id'=>$event->id]) }}">Supprimer</a></td>
                </tr>
                @endforeach
                
            </table>
            
        {{ $events->links() }}


@endsection