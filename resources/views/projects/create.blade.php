@extends('layout')

@section('title', 'Crear Proyecto')
@section('content')
    <h1>Crear Nuevo Proyecto</h1>


    @include('partials.validation-errors')

    <form action="{{ route('projects.store') }}" method="POST">
        @include('projects._form', ['btnText'=> 'Guardar'] )
    </form>
@endsection
