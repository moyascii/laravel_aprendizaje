@extends('layout')

@section('title', 'Portfolio')
@section('content')
    <h1>Portfolio</h1>

    <ul>

        @forelse ($projets as $project)

            <li><a href="{{ route('portfolio.show', $project) }}"> {{ $project->title }} </a></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $projets->links() }}
    </ul>
@endsection
