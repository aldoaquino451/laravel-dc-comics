@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">
        {{ $comic->series }}
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">
            <i class="fa-solid fa-pencil"></i>
        </a>
    </h1>

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
