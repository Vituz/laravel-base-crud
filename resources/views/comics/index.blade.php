@extends('layout.app')

@section('title', 'Comics List')

@section('content')

<h1>Comics List</h1>

<a href="{{route('comics.create')}}">Add Comic</a>

@foreach($comics as $comic)

<a href="{{route('comics.show', $comic->id)}}">
    <div class="card">
        <img src="{{$comic->poster}}" alt="">
        <h2>{{$comic->name}}</h2>
    </div>
</a>
@endforeach

@endsection