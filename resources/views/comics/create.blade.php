@extends('layout.app')

@section('title', 'New Comic')

@section('content')

<h1>Add new Comic</h1>


<form action="{{route('comics.store')}}" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Type comic name">

    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeholder="Type comic description">

    <label for="poster">Poster</label>
    <input type="text" name="poster" id="poster" placeholder="Add URL comic poster">

    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Add comic price">


    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection