@extends('layouts.base')

@section('pageTitle', 'HomePage')

@section('content')
    
    <h1>Films:</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie['title']}} - {{$movie['nationality']}} - {{$movie['date']}} - {{$movie['vote']}}
            </li>
        @endforeach
    </ul>
    
@endsection