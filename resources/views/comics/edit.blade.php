@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Modifica il fumetto <strong>{{ $comic->title }}</strong> </h2>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                {{-- elemnto da inserire i  tutti i form di Laravel per un controllo di sicurezza  --}}
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Modifica il Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Modifica la Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="thumb">Modifica l'URL dell'Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Modifica il Prezzo '$xx.xx'</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}">
                </div>
                <div class="form-group mb-3">
                    <label for="series">Modifica la Serie</label>
                    <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
                </div>
                <div class="form-group my-4">
                    <label class="active" for="sale_date">Modifica la Data di Vendita</label>
                    <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="form-group mb-3">
                    <label for="type">Modifica il tipo</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}">
                </div>
                <div class="mb-5 mt-4">
                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>
    </div>
@endsection
