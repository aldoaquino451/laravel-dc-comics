@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <p>Abbiamo nello store {{ count($comics) }} fumetti</p>
@endsection
