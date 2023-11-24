@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Home</h1>
    <p>Abbiamo nello store <strong>{{ count($comics) }} fumetti</strong></p>
@endsection
