@extends('layout.app')

@section('title', 'Comic')

@section('content')

<h1>Comic Show</h1>

<div>
    <img src="{{$comic->poster}}" alt="">
    <h2>{{$comic->name}}</h2>
</div>

@endsection