@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">{{ $comic->series }}</h1>

    <div class="row">

        <div class="col-4 offset-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>

        <div class="col-4">
            <h3>{{ $comic->title }}</h3>
            <p class="text-capitalize">Tipo: {{ $comic->type }}</p>
            <p>Prezzo: {{ $comic->price }}</p>
            <p>Descrizione: <br>{{ $comic->description }}</p>
        </div>

    </div>
@endsection
