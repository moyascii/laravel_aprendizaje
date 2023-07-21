@extends('layout')

@section('title', 'Crear Proyecto')
@section('content')
    <h1>Crear Nuevo Proyecto</h1>

    <form action="{{ route('projets.store') }}" method="POST">
        @csrf
        <label for="title">
            Título del proyecto <br>
            <input type="text" name="title" id="title">
        </label>
        <br><br>
        <label for="url">
            URL del proyecto <br>
            <input type="text" name="url" id="url">
        </label>
        <br><br>
        <label for="description">
            Descripción del proyecto <br>
            <textarea name="description" id="description"></textarea>
        </label>
        <br><br>
        <button>Guardar</button>
    </form>
@endsection
