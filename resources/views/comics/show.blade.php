@extends('templates.base')
@section('mainTitle', $mainTitle)

@section('content')
<div>
    <div class="comic-container">
        <img src="{{$comic->image_URL}}" alt="">
        <div class="comic-text">
            <h2>{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>
        </div>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            <div class="btn-container">
                <a class="btn btn-edit" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-destroy">Elimina</button>
            </div>
        </form>
    </div>
</div>


@endsection
