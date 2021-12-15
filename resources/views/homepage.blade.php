@extends('layout')

@section('title','Accueil')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 title">
			    
			    <h1>JDR Area - La nation des Rolistes</h1>
				
				<p>
					Avis aux amateurs de Donjons et Dragons, Warhammer, Magic et autres, bienvenue dans votre paradis !
				</p>

		</div>
	</div>
	
	<section class="sideBySide">
	    
	    <div>
	
    	@foreach ($events as $event)
    	
                    <div class="middle">
                        <div class="event">
                            <a href="{{ route('event.showEvent', ['id' => $event->id]) }}"> {{ $event->name }}</a>
                            <div class="flex-row">
                                <p>Catégorie du jeux</p>
                                <img src="#" alt="Logo duv jeux en question ? ">
                            </div>
                            
                            <h3>Nom du Créateur</h3>
                        
                            <p>Description de l'évènement, de son script et autre</p>
                            
                            <div class="box">
                                
                                <div class="player">
                                    
                                    <ul>
                                        <li>Nom d'un joueur</li>
                                        <li>Nom d'un joueur</li>
                                        <li>Nom d'un joueur</li>
                                    </ul>
                                </div>
                                
                                <div class="info">
                                    
                                    <ul>
                                        <li> {{ $event->day }}</li>
                                        <li>Duration</li>
                                        <li>Localisation</li>
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
    
        @endforeach
        
        </div>
        
        <div class="middle">
            
            <div class="stuck">
                
                <p> Calendrier</p>
                

    </section>



@endsection