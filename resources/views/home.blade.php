@extends('layout')

@section('title', 'Home')
@section('content')
    <h1>Hola, bienvenido</h1>
    <p>Bienvenid@ {{ $name ?? 'Invitado' }}
@endsection
