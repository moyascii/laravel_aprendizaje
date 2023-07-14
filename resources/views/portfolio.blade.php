@extends('layout')

@section('title', 'Portfolio')
@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{--        @isset($portfolio)--}}
        {{--            @if($portfolio)--}}
        @forelse ($portfolio as $portfolioItem)
            <li> {{ $portfolioItem['title'] }} </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
            {{--            @endif--}}
            {{--        @endisset--}}
    </ul>
@endsection
