@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Home</h1>
    <p>Abbiamo nello store <strong>{{ count($comics) }} fumetti</strong></p>
    <div>
        <p>Per aggiunge un nuovo Fumetto alla Collection</p>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Vai al Form</a>
    </div>
@endsection
