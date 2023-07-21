@extends('layout')

@section('title', 'Portfolio')
@section('content')
    <h1>Portfolio</h1>

    <a href="{{ route('projets.create') }}">Crear Proyecto</a>
    <ul>

        @forelse ($projets as $project)

            <li><a href="{{ route('projets.show', $project) }}"> {{ $project->title }} </a></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $projets->links() }}
    </ul>
@endsection
