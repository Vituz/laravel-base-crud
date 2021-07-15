@extends('layout.app')

@section('title', 'Comic')

@section('content')

<h1>Modify Comic</h1>


<form action="{{route('comics.update', $comic->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form_group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Type comic name" value="{{$comic->name}}">
        <small id="nameHelper">tipe a name with max 100 characters</small>
    </div>

    <div class="form_group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Type comic description" value="{{$comic->description}}">
        <small id="descriptionHelper">tipe a description</small>

    </div>

    <div class="form_group">
        <h4>Current image</h4>
        <img src="{{$comic->poster}}" alt="">
    </div>

    <div class="form_group">
        <label for="poster">Change cover image</label>
        <input type="text" name="poster" id="poster" placeholder="Add path comic poster" value="{{$comic->poster}}"">
        <small id=" posterHelper">copy image path</small>

    </div>

    <div class="form_group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" placeholder="Add comic price" value="{{$comic->price}}">
        <small id="priceHelper">tipe a price</small>

    </div>

    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection