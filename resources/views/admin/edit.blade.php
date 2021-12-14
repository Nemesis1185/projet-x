@extends('layout')

@section('title','Modification')


@section('content')

<h1>Modifier l'évènement : {{ $event->name }}</h1>
    
    <form method="post" action="{{ route('update', ['id'=>$event->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Nom de l'évènement</label>
            <input value="{{ $event->name }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="15">{{ $event->content }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
         <div class="form-group">
            <label for="addressInput">Adresse</label>
            <input value="{{ $event->address }}" type="text" class="form-control" name="addressInput" id="addressInput">
            <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" hidden>
             <div class="col-6 proposition">
              <div class="adress-feedback">
                <ul style="list-style-type: '- '"></ul>
              </div>
            </div>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
         <div class="form-group">
            <label for="duration">Durée</label>
            <input value="{{ $event->duration }}" type="date" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration">
            @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="day">Date</label>
            <input value="{{ $event->day }}" type="text" class="form-control @error('day') is-invalid @enderror" name="day" id="day">
            @error('day')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option @if($event->category_id === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary">Modifier</button>
        </div>
    </form>

@endsection