@extends('templates.base')
@section('mainTitle', 'Comics list')

@section('content')

    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic->image_URL}}" alt="">
                <h3><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></h3>
                <p>({{$comic->type}})</p>
            </div>
        @endforeach
    </div>


@endsection
