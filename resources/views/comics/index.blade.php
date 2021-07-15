@extends('layout.app')

@section('title', 'Comics List')

@section('content')

<h1>Comics List</h1>

<a href="{{route('comics.create')}}">Add Comic</a>


<div class="container">
    <table class="comics_table">
        <tr>
            <th>
                id
            </th>
            <th>
                poster
            </th>
            <th>
                name
            </th>
            <th>
                description
            </th>
            <th>
                Action
            </th>
        </tr>
        <tr>
            @foreach($comics as $comic)

            <td>
                {{$comic->id}}
            </td>
            <td>
                <img height="200px" src="{{$comic->poster}}" alt="">
            </td>
            <td>
                {{$comic->name}}
            </td>
            <td>
                {{$comic->description}}
            </td>
            <td>
                <a href="{{route('comics.show', $comic->id)}}">View</a>
                <a href="{{route('comics.edit', $comic->id)}}">Edit</a>

                <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                    @csrf

                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </td>

            @endforeach

        </tr>
    </table>
</div>

<!-- 
<form id="comic_del" name="comic_del" method="post">
    <input type="button" @click="deleteRecord()" value="delete">
</form> 
-->

@endsection