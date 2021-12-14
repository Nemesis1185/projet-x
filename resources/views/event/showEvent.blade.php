@extends('layout')

@section('title', $event->name)

@section('content')

        <div class="box">
            
            <h2> {{ $event->name }}</h2>
            
            <p>Créer par {{ $event->user->username }} le {{ $event->created_at }}</p>
            
        </div>
        
        <section>
            
            <div>
                
                <p> {{ $event->content }}</p>
                
            </div>
            
            <p>C'est ici que vous pouvez mettre vos commentaires</p>
            
          </section>
          
         
            
@endsection