@extends('layout')

@section('title', $event->name)

@section('content')

        <div class="boxEvent">
            
            <h3> {{ $event->name }}</h3>
            
            <p>Créer par {{ $event->user->username }} le {{ $event->created_at }}</p>
            
        </div>
        
        <section>
            
            <div>
                
                <p> {{ $event->content }}</p>
                
            </div>
            
            <p>C'est ici que vous pouvez mettre vos commentaires</p>
            
          </section>
          
          <form action="{{ route('comments.store', ['id' => $event->id]) }}" method="post">
              
              @csrf
              
              <label for="pseudo">Pseudo</label>
              <input type="text" id="pseudo" name="pseudo">
              
              <label for="content">Votre Commentaire ( soyez sympa ! )</label>
              <textarea name="content" id="content" placeholder="C'est ici qu'on écrit des choses gentilles !"></textarea>
              
              <button class="btn">Ajouter</button>
              
          </form>
          
          <div>
              
              <ul>
                  @foreach($comments as $comment)
                  
                  <li>
                      
                      <h4>Rédigé par {{ $comment->pseudo }} le {{ $comment->created_at }}</h4>
                      <p> {{ $comment->content }}</p>
                  </li>
                  
                  @endforeach
              </ul>
          </div>
          
         
            
@endsection