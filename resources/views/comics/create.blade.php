@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Aggiungi un nuovo Fumetto nel catalogo</h2>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('comics.store') }}" method="POST">
                {{-- elemnto da inserire i  tutti i form di Laravel per un controllo di sicurezza  --}}
                @csrf

                <div class="form-group mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="thumb">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb"
                        placeholder="Inserisci l'URL dell'immagine">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price"
                        placeholder="Inserisci il prezzo '$xx.xx'">
                </div>
                <div class="form-group mb-3">
                    <label for="series">Serie</label>
                    <input type="text" class="form-control" name="series" id="series"
                        placeholder="Inserisci la Serie">
                </div>
                <div class="form-group my-4">
                    <label class="active" for="sale_date">Data di Vendita</label>
                    <input type="date" id="sale_date" name="sale_date">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="type">Scegli in Tipo</label>
                    <select class="form-control" id="type" name="type">
                        <option>comic book</option>
                        <option>graphic novel</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </form>
        </div>
    </div>
@endsection
