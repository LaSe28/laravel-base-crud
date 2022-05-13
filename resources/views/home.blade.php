@extends('templates.base')
@section('mainTitle', 'Comics list')

@section('content')

    <div class="card-container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic->image_URL}}" alt="">
                <h3><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></h3>
                <p>({{$comic->type}})</p>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    <div class="btn-container">
                        <a class="btn btn-edit" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-destroy">Elimina</button>
                    </div>
                </form>
            </div>
        @endforeach
    </div>


@endsection
